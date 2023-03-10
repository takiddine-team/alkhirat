<?php
/*
 *
 */

return array(

    'login'           => array(
        'title'  => 'Login',
        'assets' => array(
            'custom' => array(
                'js' => array(
                    'js/custom/authentication/sign-in/general.js',
                ),
            ),
        ),
        'layout' => array(
            'main' => array(
                'type' => 'blank', // Set blank layout
                'body' => array(
                    'class' => theme()->isDarkMode() ? '' : 'bg-body',
                ),
            ),
        ),
    ),

    'register'        => array(
        'title'  => 'Register',
        'assets' => array(
            'custom' => array(
                'js' => array(
                    'js/custom/authentication/sign-up/general.js',
                ),
            ),
        ),
        'layout' => array(
            'main' => array(
                'type' => 'blank', // Set blank layout
                'body' => array(
                    'class' => theme()->isDarkMode() ? '' : 'bg-body',
                ),
            ),
        ),
    ),
    'forgot-password' => array(
        'title'  => 'Forgot Password',
        'assets' => array(
            'custom' => array(
                'js' => array(
                    'js/custom/authentication/password-reset/password-reset.js',
                ),
            ),
        ),
        'layout' => array(
            'main' => array(
                'type' => 'blank', // Set blank layout
                'body' => array(
                    'class' => theme()->isDarkMode() ? '' : 'bg-body',
                ),
            ),
        ),
    ),

    'log' => array(
        'audit'  => array(
            'title'  => 'Audit Log',
            'assets' => array(
                'custom' => array(
                    'css' => array(
                        'plugins/custom/datatables/datatables.bundle.css',
                    ),
                    'js'  => array(
                        'plugins/custom/datatables/datatables.bundle.js',
                    ),
                ),
            ),
        ),
        'system' => array(
            'title'  => 'System Log',
            'assets' => array(
                'custom' => array(
                    'css' => array(
                        'plugins/custom/datatables/datatables.bundle.css',
                    ),
                    'js'  => array(
                        'plugins/custom/datatables/datatables.bundle.js',
                    ),
                ),
            ),
        ),
    ),
    'admin' => array(
        'suggestion' => array(
            'title'  => '?????????? ??????????',
            'view'   => 'admin/suggestion',
            'assets' => array(
                'custom' => array(
                    'js' => array(
                        'js/custom/widgets.js',
                        '../../../app.js'
                    ),
                ),
            ),
        ),

    ),
    'supporter' => array(
        'rightsDuties' => array(
            'title'  => '???????? ?????????????? ????????????',
            'view'   => 'supporter/rightsDuties',
            'assets' => array(
                'custom' => array(
                    'js' => array(
                        'js/custom/widgets.js',
                        '../../../app.js'
                    ),
                ),
            ),
        ),
        'contributions' => array(
            'title'  => '???????? ???????????? ?????? ??????????????',
            'view'   => 'supporter/contributions',
            'assets' => array(
                'custom' => array(
                    'js' => array(
                        'js/custom/widgets.js',
                        '../../../app.js'
                    ),
                ),
            ),
        ),
        'payments' => array(
            'title'  => '??????????????????',
            'view'   => 'supporter/payments',
            'assets' => array(
                'custom' => array(
                    'js' => array(
                        'js/custom/widgets.js',
                        '../../../app.js'
                    ),
                ),
            ),
        ),
        'suggestion' => array(
            'title'  => '???????????? ????????',
            'view'   => 'supporter/suggestion',
            'assets' => array(
                'custom' => array(
                    'js' => array(
                        'js/custom/widgets.js',
                        '../../../app.js'
                    ),
                ),
            ),
        ),
    ),
    'beneficiaries' => array(
        'title'  => '?????????? ????????????????????',
        'view'   => 'beneficiaries',
        'assets' => array(
            'custom' => array(
                'js' => array(
                    'js/custom/widgets.js',
                    '../../../app.js'
                ),
            ),
        ),

    ),
    'account' => array(
        'overview' => array(
            'title'  => '?????????????? ????????????????',
            'view'   => 'account/overview/overview',
            'assets' => array(
                'custom' => array(
                    'js' => array(
                        'js/custom/widgets.js',
                        '../../../app.js'
                    ),
                ),
            ),
        ),
        'services' => array(
            'title'  => '?????????? ??????????????',
            'view'   => 'account/settings/services',
            'assets' => array(
                'custom' => array(
                    'js' => array(
                        'js/custom/widgets.js',
                        '../../../app.js'
                    ),
                ),
            ),
        ),

        'settings' => array(
            'beneficiarie' => array(
                'title'  => '???????????? ????????????????',
                'view'   => 'account/settings/beneficiarie',
                'assets' => array(
                    'custom' => array(
                        'js' => array(
                            'js/custom/widgets.js',
                            '../../../app.js',
                        ),

                    ),
                ),
            ),
            'supporter' => array(
                'title'  => '???????????? ????????????',
                'view'   => 'account/settings/supporter',
                'assets' => array(
                    'custom' => array(
                        'js' => array(
                            'js/custom/widgets.js',
                            '../../../app.js',
                        ),

                    ),
                ),
            ),
            'supporter' => array(
                'title'  => '?????????????? ????????????',
                'view'   => 'account/settings/supporter/influences',
                'assets' => array(
                    'custom' => array(
                        'js' => array(
                            'js/custom/widgets.js',
                            '../../../app.js',
                        ),

                    ),
                ),
            ),
            'overview' => array(
                'title'  => '?????????????????? ??????????????',
                'view'   => 'account/settings/overview',
                'assets' => array(
                    'custom' => array(
                        'js' => array(
                            'js/custom/widgets.js',
                            '../../../app.js'
                        ),
                    ),
                ),
            ),
            'skills' => array(
                'title'  => '????????????????',
                'view'   => 'account/settings/skills',
                'assets' => array(
                    'custom' => array(
                        'js' => array(
                            'js/custom/widgets.js',
                            '../../../app.js'
                        ),
                    ),
                ),
            ),
            'certificates' => array(
                'title'  => '????????????????',
                'view'   => 'account/settings/certificates',
                'assets' => array(
                    'custom' => array(
                        'js' => array(
                            'js/custom/widgets.js',
                            '../../../app.js'
                        ),
                    ),
                ),
            ),
            'necessities' => array(
                'title'  => '????????????????????',
                'view'   => 'account/settings/necessities',
                'assets' => array(
                    'custom' => array(
                        'js' => array(
                            'js/custom/widgets.js',
                            '../../../app.js'
                        ),
                    ),
                ),
            ),
            'experiences' => array(
                'title'  => '?????????????? ??????????????',
                'view'   => 'account/settings/experiences',
                'assets' => array(
                    'custom' => array(
                        'js' => array(
                            'js/custom/widgets.js',
                            '../../../app.js'
                        ),
                    ),
                ),
            ),

            'title'  => '?????????? ?????????????????? ??????????????',
            'assets' => array(

                'custom' => array(
                    'js' => array(
                        'js/custom/account/settings/profile-details.js',
                        'js/custom/account/settings/signin-methods.js',
                        'js/custom/modals/two-factor-authentication.js',
                        '../../../app.js'
                    ),
                ),

            ),
        ),
    ),

    'users'         => array(
        'title' => 'User List',

        '*' => array(
            'title' => 'Show User',

            'edit' => array(
                'title' => 'Edit User',
            ),
        ),
    ),


    'test' => array(
        'title'  => '??????????',
        'view'   => 'admin/overview/index',
        'layout'      => array(
            'page-title' => array(
                'description' => false,
                'breadcrumb'  => true,
            ),
        ),
        'assets' => array(
            'custom' => array(
                'js' => array(
                    'js/custom/widgets.js',
                ),
            ),
        ),
    ),



);
