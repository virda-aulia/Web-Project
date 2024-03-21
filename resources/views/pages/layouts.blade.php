<!DOCTYPE html>

<html lang="en" class="light-style layout-navbar-fixed layout-menu-fixed" dir="ltr" data-theme="theme-default"
    data-assets-path="{{ asset('template') }}/assets/" data-template="vertical-menu-template">

<head>
    <meta charset="utf-8" />
    <meta name="viewport"
        content="width=device-width, initial-scale=1.0, user-scalable=no, minimum-scale=1.0, maximum-scale=1.0" />

    <title>
        .: My Skripsi Website :.
    </title>

    <meta name="description" content="" />

    @include("pages.layouts.css.file-css")

    @stack("app-css")

</head>

<body>
    <div class="layout-wrapper layout-content-navbar">
        <div class="layout-container">

            @include("pages.atom.aside")

            <div class="layout-page">

                @include("pages.atom.navbar")

                <div class="content-wrapper">

                    @stack("app-content")

                    @include("pages.atom.footer")

                    <div class="content-backdrop fade"></div>
                </div>
            </div>
        </div>

        <div class="layout-overlay layout-menu-toggle"></div>

        <div class="drag-target"></div>
    </div>

    @include('pages.layouts.js.file-js')

    @stack("app-js")

</body>

</html>
