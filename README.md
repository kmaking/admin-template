# KMA Admin Template

KMA Admin Template pre define setup for laravel projects.  
This package provide admin template assets and auth scaffolds for admin template using laravel blade and blade component.

## *Install*

*Install Package*
`composer require kmaking/admin-template`  

*Publish Template Assets*
`php artisan vendor:publish --tag=kma-assets`

**Directory Published**
public  
├── js  
│   └── vindicate.js  
├── plugins  
│   ├── air-datepicker  
│   ├── bootstrap-4.0.0  
│   ├── bootstrap-select  
│   ├── bootstrap-tagsinput  
│   ├── bootstrap-touchspin  
│   ├── bootstrap-wysihtml5-master  
│   ├── cropperjs  
│   ├── datatables  
│   ├── dropzone  
│   ├── fancybox  
│   ├── fullcalendar  
│   ├── highcharts-6.0.7  
│   ├── highlight.js  
│   ├── ion-rangeslider  
│   ├── jquery-asColor  
│   ├── jquery-asColorPicker  
│   ├── jquery-asGradient  
│   ├── jQuery-Knob-master  
│   ├── jquery-steps  
│   ├── jvectormap  
│   ├── malihu-custom-scrollbar-plugin-master  
│   ├── plyr  
│   ├── select2  
│   ├── slick  
│   ├── sweetalert2  
│   ├── switchery  
│   ├── timedropper  
│   └── wysihtml5-master  
└── vendors  
      ├── fonts  
      ├── images  
      ├── scripts  
      └── styles  
  
*Publish Template Auth Scaffolds*  
`php artisan vendor:publish --tag=kma-blade`  
  
**Directory Published**  
resources/  
└── views  
    ├── components  
    │   ├── alert.blade.php  
    │   ├── button.blade.php  
    │   ├── confirm  
    │   │   ├── form.blade.php  
    │   │   └── link.blade.php  
    │   ├── datatable  
    │   │   ├── script.blade.php  
    │   │   └── style.blade.php  
    │   ├── form.blade.php  
    │   ├── form-footer.blade.php  
    │   ├── form-group  
    │   │   ├── checkbox.blade.php  
    │   │   ├── input.blade.php  
    │   │   ├── radio.blade.php  
    │   │   └── textarea.blade.php  
    │   ├── form-group.blade.php  
    │   ├── modal.blade.php  
    │   ├── panel.blade.php  
    │   ├── plugin  
    │   │   ├── script.blade.php  
    │   │   └── style.blade.php  
    │   ├── sweetalert  
    │   │   ├── script.blade.php  
    │   │   └── style.blade.php  
    │   └── touchspin.blade.php  
    └── kma-blade  
        ├── auth  
        │   ├── login.blade.php  
        │   ├── passwords  
        │   │   ├── email.blade.php  
        │   │   └── reset.blade.php  
        │   └── register.blade.php  
        ├── layout  
        │   ├── app.blade.php  
        │   └── auth.blade.php  
        └── partials  
            ├── breadcrumbs.blade.php  
            ├── header.blade.php  
            └── sidebar.blade.php  

## *Licence*
The MIT License (MIT).