@echo off
echo Ingresando a la carpeta Office 16
cd /d %ProgramFiles%\Microsoft Office\Office16

echo Activando...


echo Ejecutando Scripts
for /f %x in ('dir /b ..\root\Licenses16\ProPlus2019VL*.xrm-ms') do cscript ospp.vbs /inslic:"..\root\Licenses16\%x"

cscript ospp.vbs /setprt:1688
cscript ospp.vbs /unpkey:6MWKP >nul
cscript ospp.vbs /inpkey:-OFFICE ACTIVATION-
cscript ospp.vbs /sethst:e8.us.to
cscript ospp.vbs /act

echo Activacion Completada.
pause

