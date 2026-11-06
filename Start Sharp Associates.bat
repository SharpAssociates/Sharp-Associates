@echo off
title Sharp Associates - Local PHP Server
cd /d "C:\laragon\www\sharp-associates"

echo ==========================================
echo   Sharp Associates Local Development
echo ==========================================
echo.
echo Starting PHP server...
echo.
echo Website: http://127.0.0.1:8000
echo Keep this window open while working.
echo Press Ctrl+C to stop the server.
echo.

"C:\laragon\bin\php\php-8.3.36-Win32-vs16-x64\php.exe" -S 127.0.0.1:8000

echo.
echo PHP server stopped.
pause
