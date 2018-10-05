@echo off
rem START or STOP Services
rem ----------------------------------
rem Check if argument is STOP or START

if not ""%1"" == ""START"" goto stop

if exist D:\Blog\hypersonic\scripts\ctl.bat (start /MIN /B D:\Blog\server\hsql-sample-database\scripts\ctl.bat START)
if exist D:\Blog\ingres\scripts\ctl.bat (start /MIN /B D:\Blog\ingres\scripts\ctl.bat START)
if exist D:\Blog\mysql\scripts\ctl.bat (start /MIN /B D:\Blog\mysql\scripts\ctl.bat START)
if exist D:\Blog\postgresql\scripts\ctl.bat (start /MIN /B D:\Blog\postgresql\scripts\ctl.bat START)
if exist D:\Blog\apache\scripts\ctl.bat (start /MIN /B D:\Blog\apache\scripts\ctl.bat START)
if exist D:\Blog\openoffice\scripts\ctl.bat (start /MIN /B D:\Blog\openoffice\scripts\ctl.bat START)
if exist D:\Blog\apache-tomcat\scripts\ctl.bat (start /MIN /B D:\Blog\apache-tomcat\scripts\ctl.bat START)
if exist D:\Blog\resin\scripts\ctl.bat (start /MIN /B D:\Blog\resin\scripts\ctl.bat START)
if exist D:\Blog\jboss\scripts\ctl.bat (start /MIN /B D:\Blog\jboss\scripts\ctl.bat START)
if exist D:\Blog\jetty\scripts\ctl.bat (start /MIN /B D:\Blog\jetty\scripts\ctl.bat START)
if exist D:\Blog\subversion\scripts\ctl.bat (start /MIN /B D:\Blog\subversion\scripts\ctl.bat START)
rem RUBY_APPLICATION_START
if exist D:\Blog\lucene\scripts\ctl.bat (start /MIN /B D:\Blog\lucene\scripts\ctl.bat START)
if exist D:\Blog\third_application\scripts\ctl.bat (start /MIN /B D:\Blog\third_application\scripts\ctl.bat START)
goto end

:stop
echo "Stopping services ..."
if exist D:\Blog\third_application\scripts\ctl.bat (start /MIN /B D:\Blog\third_application\scripts\ctl.bat STOP)
if exist D:\Blog\lucene\scripts\ctl.bat (start /MIN /B D:\Blog\lucene\scripts\ctl.bat STOP)
rem RUBY_APPLICATION_STOP
if exist D:\Blog\subversion\scripts\ctl.bat (start /MIN /B D:\Blog\subversion\scripts\ctl.bat STOP)
if exist D:\Blog\jetty\scripts\ctl.bat (start /MIN /B D:\Blog\jetty\scripts\ctl.bat STOP)
if exist D:\Blog\hypersonic\scripts\ctl.bat (start /MIN /B D:\Blog\server\hsql-sample-database\scripts\ctl.bat STOP)
if exist D:\Blog\jboss\scripts\ctl.bat (start /MIN /B D:\Blog\jboss\scripts\ctl.bat STOP)
if exist D:\Blog\resin\scripts\ctl.bat (start /MIN /B D:\Blog\resin\scripts\ctl.bat STOP)
if exist D:\Blog\apache-tomcat\scripts\ctl.bat (start /MIN /B /WAIT D:\Blog\apache-tomcat\scripts\ctl.bat STOP)
if exist D:\Blog\openoffice\scripts\ctl.bat (start /MIN /B D:\Blog\openoffice\scripts\ctl.bat STOP)
if exist D:\Blog\apache\scripts\ctl.bat (start /MIN /B D:\Blog\apache\scripts\ctl.bat STOP)
if exist D:\Blog\ingres\scripts\ctl.bat (start /MIN /B D:\Blog\ingres\scripts\ctl.bat STOP)
if exist D:\Blog\mysql\scripts\ctl.bat (start /MIN /B D:\Blog\mysql\scripts\ctl.bat STOP)
if exist D:\Blog\postgresql\scripts\ctl.bat (start /MIN /B D:\Blog\postgresql\scripts\ctl.bat STOP)

:end

