@echo off

REM Navigate to your Laravel project directory
cd G:\Eng-Nabil\portfolio

REM Start the Laravel server and run it in a new command prompt window
start /B php artisan serve

REM Wait for a few seconds to ensure the server starts
timeout /t 2 /nobreak > NUL

REM Open Chrome with the Laravel project's URL
start "" "C:\Users\Public\Desktop\Google Chrome.lnk" "http://localhost:8000"

REM Start XAMPP's Apache and MySQL services
"C:\ProgramData\Microsoft\Windows\Start Menu\Programs\XAMPP\XAMPP Control Panel.lnk"
