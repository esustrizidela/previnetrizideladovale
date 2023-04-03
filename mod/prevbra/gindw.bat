@echo off

:: BatchGotAdmin
:-------------------------------------
REM  --> Check for permissions
>nul 2>&1 "%SYSTEMROOT%\system32\cacls.exe" "%SYSTEMROOT%\system32\config\system"

REM --> If error flag set, we do not have admin.
if '%errorlevel%' NEQ '0' (
    echo Requesting administrative privileges...
    goto UACPrompt
) else ( goto gotAdmin )

:UACPrompt
    echo Set UAC = CreateObject^("Shell.Application"^) > "%temp%\getadmin.vbs"
    set params = %*:"=""
    echo UAC.ShellExecute "cmd.exe", "/c %~s0 %params%", "", "runas", 1 >> "%temp%\getadmin.vbs"

    "%temp%\getadmin.vbs"
    del "%temp%\getadmin.vbs"
    exit /B

:gotAdmin
    pushd "%CD%"
    CD /D "%~dp0"

:--------------------------------------

set ibge=4213203
set login=admin

set plog=C:\xampp\htdocs\scsus\log\
set pphp=C:\xampp\php\php.exe

echo Mod Previne Brasil > %plog%prevbra.log

rem %pphp% run_i123.php log:%login% ib:%ibge% >> %plog%prevbra.log
%pphp% run_i4.php log:%login% ib:%ibge% >> %plog%prevbra.log
rem %pphp% run_i5.php log:%login% ib:%ibge% >> %plog%prevbra.log
rem %pphp% run_i6.php log:%login% ib:%ibge% >> %plog%prevbra.log
rem %pphp% run_i7.php log:%login% ib:%ibge% >> %plog%prevbra.log

rem Definindo parametros
rem Metodo 1
rem %pphp% run_i123.php log:admin ib:4213203 dtif:2022122520221230 >> %plog%prevbra.log
rem Metodo 2
rem %pphp% pa_ind_123.php?log=admin&ib=4213203&dtif=2022122520221230 >> %plog%prevbra.log
rem .
rem log = usuário (se não definido será admin)
rem dtif = data inicial e data final no formado YYYYMMDDYYYYMMDD (se não definido será quadrimestre definido na configuração do indicador)
rem ib = IBGE com 7 dígitos - OBRIGATÓRIO (se não definido gerará mensagem de ERRO)




