// gcc -I/usr/include/fastcgi -lfcgi testfastcgi.c -o test.fastcgi 
#include <stdlib.h>
#include <string.h>
#include <syslog.h>
#include <alloca.h>
#include <fcgiapp.h>
#define LISTENSOCK_FILENO 0
#define LISTENSOCK_FLAGS 0

#include <stdio.h>

int main(int argc, char** argv) 
{
  openlog("testfastcgi", LOG_CONS|LOG_NDELAY, LOG_USER);
  int err = FCGX_Init(); /* call before Accept in multithreaded apps */
  if (err) { syslog (LOG_INFO, "FCGX_Init failed: %d", err); return 1; }
  FCGX_Request cgi;
  err = FCGX_InitRequest(&cgi, LISTENSOCK_FILENO, LISTENSOCK_FLAGS);
  if (err) { syslog(LOG_INFO, "FCGX_InitRequest failed: %d", err); return 2; }

  while (1)
  { err = FCGX_Accept_r(&cgi);
    if (err) { syslog(LOG_INFO, "FCGX_Accept_r stopped: %d", err); break; }
    char** envp;
    int size = 400;
    for (envp = cgi.envp; *envp; ++envp) size += strlen(*envp) + 11;
    char*  result = (char*) alloca(size);
    strcpy(result, "Status: 200 OK\r\nContent-Type: text/html\r\n\r\n");
    strcat(result, "<html><head><title>testcgi</title></head><body><p>working</p><ul>\r\n");
    
    fprintf(stderr, "---\n");
    for (envp = cgi.envp; *envp; ++envp)
    { strcat(result, "<li>"); 
      strcat(result, *envp); 
      strcat(result, "</li>\r\n");
      fprintf(stderr, "%s\n", *envp);
    }
    fprintf(stderr, ":::stream:\n");
    int ch = FCGX_GetChar(cgi.in);
    while(ch!=-1){ fputc(ch,stderr); ch = FCGX_GetChar(cgi.in); }
    fprintf(stderr, "\n\n");

    strcat(result, "</ul></body></html>\r\n");
    FCGX_PutStr(result, strlen(result), cgi.out);
    //Can you put more than once?
    strcpy(result, "Apparently i can append this way?\n");
    FCGX_PutStr(result, strlen(result), cgi.out);
  }

  return 0;
}