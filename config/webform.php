<?php

return [

    //type = categories the chump
    // edit = if have an elements for editing or not
    // element = element which must displaying as inputs
    // class = class each group form
    // attribute = the attr specific in element input
    // type_champ = type each element Input
    // type_elements =  elements which must switch between it


    'data_form' => [
        'Champ_preconfigures' => [

            'identities' => [
                'name' => 'Identities',
                'display_labels' => false,
                'champ' => [
                    'firstname' => [
                        'label' => "first name",
                        'notice' => "",
                        'value' => "",
                        'type' => "text",
                        'class' => "form-control",
                        'class_group' => "col-6 mb-3",
                        'style' => "",
                        'placeholder' => "first name",
                        'id' => "firstname",
                        'required' => true,
                        'readonly' => false,
                        'visibility' => true,
//                        'attribute' => "readonly required",
                    ],
                    'lastname' => [
                        'label' => "last name",
                        'notice' => "",
                        'value' => "",
                        'type' => "text",
                        'class' => "form-control",
                        'class_group' => "col-6 mb-3",
                        'style' => "",
                        'placeholder' => "last name",
                        'id' => "lastname",
                        'required' => true,
                        'readonly' => false,
                        'visibility' => true,

                    ],
                    'civility' => [
                        'label' => "civility",
                        'notice' => "",
                        'value' => "",
                        'type' => "select",
                        'options' => [
                            ["value" => "one", "title" => "one", "img" => ["active" => "", "src" => "", "name" => "", "size" => ""]],
                            ["value" => "two", "title" => "two", "img" => ["active" => "", "src" => "", "name" => "", "size" => ""]],
                        ],
                        'class' => "form-select",
                        'class_group' => "col-6 mb-3",
                        'style' => "",
                        'placeholder' => "civility",
                        'id' => "civility",
                        'required' => true,
                        'readonly' => false,
                        'visibility' => true,

                    ],
                ],
            ],

            'address' => [
                'name' => 'Address',
                'display_labels' => false,
                'champ' => [
                    'streetone' => [
                        'label' => "street one",
                        'notice' => "",
                        'value' => "",
                        'type' => "text",
                        'class' => "form-control",
                        'class_group' => "col-6 mb-3",
                        'style' => "",
                        'placeholder' => "street one",
                        'id' => "streetone",
                        'required' => true,
                        'readonly' => false,
                        'visibility' => true,

                    ],
                    'streettwo' => [

                        'label' => "street two",
                        'notice' => "",
                        'value' => "",
                        'type' => "text",
                        'class' => "form-control",
                        'class_group' => "col-6 mb-3",
                        'style' => "",
                        'placeholder' => "street one",
                        'id' => "streetone",
                        'required' => true,
                        'readonly' => false,
                        'visibility' => true,
                    ],
                    'codepostal' => [
                        'label' => "code postal",
                        'notice' => "",
                        'value' => "",
                        'type' => "text",
                        'class' => "form-control",
                        'class_group' => "col-6 mb-3",
                        'style' => "",
                        'placeholder' => "code postal",
                        'id' => "codepostal",
                        'required' => true,
                        'readonly' => false,
                        'visibility' => true,
                    ],
                    'city' => [
                        'label' => "city",
                        'notice' => "",
                        'value' => "",
                        'type' => "text",
                        'class' => "form-control",
                        'class_group' => "col-6 mb-3",
                        'style' => "",
                        'placeholder' => "city",
                        'id' => "city",
                        'required' => true,
                        'readonly' => false,
                        'visibility' => true,
                    ],
                ],
            ],

            'phone' => [
                'name' => 'Phone',
                'display_labels' => false,
                'champ' => [
                    'phone' => [
                        'label' => "phone",
                        'notice' => "",
                        'value' => "",
                        'type' => "text",
                        'class' => "form-control",
                        'class_group' => "col-12 mb-3",
                        'style' => "",
                        'placeholder' => "phone",
                        'id' => "phone",
                        'required' => true,
                        'readonly' => false,
                        'visibility' => true,
                    ],
                ],
            ],

            'email' => [
                'name' => 'Email',
                'display_labels' => false,
                'champ' => [
                    'email' => [
                        'label' => "email",
                        'notice' => "",
                        'value' => "",
                        'type' => "text",
                        'class' => "form-control",
                        'class_group' => "col-12 mb-3",
                        'style' => "",
                        'placeholder' => "email",
                        'id' => "email",
                        'required' => true,
                        'readonly' => false,
                        'visibility' => true,
                    ],
                ],
            ],

            'website' => [
                'name' => 'Website',
                'display_labels' => false,
                'champ' => [
                    'Website' => [
                        'label' => "Website",
                        'notice' => "",
                        'value' => "",
                        'type' => "text",
                        'class' => "form-control",
                        'class_group' => "col-12 mb-3",
                        'style' => "",
                        'placeholder' => "website.com",
                        'id' => "website",
                        'required' => true,
                        'readonly' => false,
                        'visibility' => true,
                    ],
                ],
            ],

            'company' => [
                'name' => 'Company',
                'display_labels' => false,
                'champ' => [
                    'company' => [
                        'label' => "Company",
                        'notice' => "",
                        'value' => "",
                        'type' => "text",
                        'class' => "form-control",
                        'class_group' => "col-12 mb-3",
                        'style' => "",
                        'placeholder' => "company name",
                        'id' => "company",
                        'required' => true,
                        'readonly' => false,
                        'visibility' => true,
                    ],
                ],
            ],

            'longText' => [
                'name' => 'Message',
                'display_labels' => false,

                'champ' => [
                    'Message' => [
                        'label' => "Message",
                        'notice' => "",
                        'value' => "",
                        'type' => "textarea",
                        'class' => "form-control",
                        'class_group' => "col-12 mb-3",
                        'style' => "",
                        'placeholder' => "Message",
                        'id' => "message",
                        'required' => true,
                        'readonly' => false,
                        'visibility' => true,
                    ],
                ],
            ],

            'privacyPpolicy' => [
                'name' => 'Privacy Policy',
                'display_labels' => false,
                'champ' => [
                    'privacyPolicy' => [
                        'name' => "Privacy Policy",
                        'label' => "Privacy Policy",
                        'placeholder' => null,
                        'type' => "checkbox",
                        'notice' => "",
                        'value' => "Yes, I accept that the personal data collected will be kept for 2 years as part of the contact with the company to access the services it provides.",
                        'class' => "text",
                        'class_group' => "col-12 mb-3",
                        'style' => "",
                        'id' => "privacyPolicy",
                        'required' => true,
                        'readonly' => null,
                        'visibility' => true,
                    ],
                ],
            ],
        ],


        'Champs_Standards' => [

            'text' => [
                'name' => 'Text',
                'display_labels' => false,
                'champ' => [
                    'Text' => [
                        'label' => "Text",
                        'notice' => "",
                        'value' => "",
                        'type' => "text",
                        'class' => "form-control",
                        'class_group' => "col-12 mb-3",
                        'style' => "",
                        'placeholder' => "Text...",
                        'id' => "phone",
                        'required' => true,
                        'readonly' => false,
                        'visibility' => true,
                    ],
                ],
            ],

            'paragraph' => [
                'name' => 'Paragraph',
                'display_labels' => false,
                'champ' => [
                    'paragraph' => [
                        'name' => "paragraph",
                        'label' => null,
                        'placeholder' => null,
                        'type' => "paragraph",
                        'notice' => "",
                        'value' => "change this text",
                        'class' => "text",
                        'class_group' => "col-12 mb-3",
                        'style' => "",
                        'id' => "paragraph",
                        'required' => null,
                        'readonly' => null,
                        'visibility' => true,
                    ],
                ],
            ],

            'datetime' => [
                'name' => 'Datetime',
                'display_labels' => false,
                'champ' => [
                    'date' => [
                        'label' => "date",
                        'notice' => "",
                        'value' => "",
                        'type' => "date",
                        'format_date' => "dd/mm/yy",
                        'class' => "form-control ",
                        'class_group' => "col-8 mb-3",
                        'style' => "",
                        'placeholder' => false,
                        'id' => "date",
                        'required' => true,
                        'readonly' => false,
                        'visibility' => true,
                    ],
                    'time' => [
                        'label' => "time",
                        'notice' => "",
                        'value' => "",
                        'type' => "time",
                        'format_date' => "H:i",
                        'class' => "form-control timePicker",
                        'class_group' => "col-4 mb-3",
                        'style' => "",
                        'placeholder' => false,
                        'id' => "time",
                        'required' => true,
                        'readonly' => false,
                        'visibility' => true,
                    ],

                ],
            ],

            'select' => [
                'name' => 'Select',
                'display_labels' => false,
                'champ' => [
                    'select' => [
                        'name' => "Select",
                        'label' => "Select",
                        'type' => "select",
                        'notice' => "",
                        'value' => "",
                        'options' => [
                            ["value" => "one", "title" => "one", "img" => ["active" => "", "src" => "", "name" => "", "size" => ""]],
                            ["value" => "two", "title" => "two", "img" => ["active" => "", "src" => "", "name" => "", "size" => ""]],
                        ],
                        'class' => "form-control",
                        'class_group' => "col-12 mb-3",
                        'style' => "",
                        'placeholder' => "Select",
                        'id' => "Select",
                        'required' => true,
                        'readonly' => false,
                        'visibility' => true,

                    ],
                ],
            ],

            'checkbox' => [
                'name' => 'Checkbox',
                'display_labels' => false,
                'champ' => [
                    'checkbox' => [
                        'name' => "checkbox",
                        'label' => "checkbox",
                        'type' => "checkbox",
                        'notice' => "",
                        'value' => "",
                        'options' => [
                            ["value" => "one", "title" => "one", "img" => ["active" => "", "src" => "", "name" => "", "size" => ""]],
                            ["value" => "two", "title" => "two", "img" => ["active" => "", "src" => "", "name" => "", "size" => ""]],
                        ],
                        'class' => "checkbox-input",
                        'class_group' => "col-12 mb-3",
                        'style' => "",
                        'placeholder' => "checkbox",
                        'id' => "checkbox",
                        'required' => true,
                        'readonly' => false,
                        'visibility' => true,

                    ],
                ],
            ],

            'radio' => [
                'name' => 'Radio',
                'display_labels' => false,
                'champ' => [
                    'radio' => [
                        'name' => "radio",
                        'label' => "radio",
                        'type' => "radio",
                        'notice' => "",
                        'value' => "",
                        'options' => [
                            ["value" => "one", "title" => "one", "img" => ["active" => "", "src" => "", "name" => "", "size" => ""]],
                            ["value" => "two", "title" => "two", "img" => ["active" => "", "src" => "", "name" => "", "size" => ""]],
                        ],
                        'class' => "radio-input",
                        'class_group' => "col-12 mb-3",
                        'style' => "",
                        'placeholder' => "radio",
                        'id' => "radio",
                        'required' => true,
                        'readonly' => false,
                        'visibility' => true,

                    ],
                ],
            ],

            'satisfaction' => [
                'name' => 'Satisfaction',
                'display_labels' => false,
                'champ' => [
                    'satisfaction' => [
                        'name' => "satisfaction",
                        'label' => "satisfaction",
                        'type' => "radio",
                        'notice' => "",
                        'value' => "",
                        'options' => [
                            ["value" => "one", "title" => "one", "img" => ["active" => "", "src" => "", "name" => "", "size" => ""]],
                            ["value" => "two", "title" => "two", "img" => ["active" => "", "src" => "", "name" => "", "size" => ""]],
                        ],
                        'class' => "radio-input",
                        'class_group' => "col-12 mb-3",
                        'style' => "",
                        'placeholder' => "radio",
                        'id' => "satisfaction",
                        'required' => true,
                        'readonly' => false,
                        'visibility' => true,

                    ],
                ],
            ],
        ]
    ],
];
