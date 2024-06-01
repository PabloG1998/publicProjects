@echo off
echo Starting
slmgr.vbs -upk
echo Product Key is Setted Up
slmgr /ipk -MS Activation-
echo.
echo Connecting with kms.msguides.com
slmgr /skms kms.msguides.com
echo.
echo Finishing...
slmgr /ato
echo.
cls
echo.
echo.
echo ===Windows Activated Succesfully==
echo *Thanks for use this Script.
echo.
echo Sourcecode at: Github.com/PabloG1998
pause
exit