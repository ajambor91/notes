Set-Variable -Name "APP_ROOT" -Value $PSScriptRoot -Option Constant
Set-Variable -Name "STATIC_PATH" -Value (Join-Path -Path $APP_ROOT -ChildPath 'static') -Option Constant
Set-Variable -Name "WORDPRESS_PATH" -Value (Join-Path -Path $APP_ROOT -ChildPath 'wordpress') -Option Constant

function Compile-StaticStyles {
    $stylesPath = Join-Path -Path $STATIC_PATH -ChildPath 'resources/static/styles'
    Write-Host $stylesPath
    Get-ChildItem -Path $stylesPath -Filter "*.scss" -File | ForEach-Object {
         $outputPath = $_.FullName.Replace(".scss", ".css")
                sass $_.FullName $outputPath

    }

}

function Run-Containers {
    docker-compose up -d
}

function Run-App {
    Compile-StaticStyles
    Run-Containers
}

Run-App