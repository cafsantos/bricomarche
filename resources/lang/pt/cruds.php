<?php

return [
    'userManagement' => [
        'title'          => 'Gestão de Utilizadores',
        'title_singular' => 'Gestão de Utilizadores',
    ],
    'permission' => [
        'title'          => 'Permissões',
        'title_singular' => 'Permissão',
        'fields'         => [
            'id'                => 'ID',
            'id_helper'         => ' ',
            'title'             => 'Title',
            'title_helper'      => ' ',
            'created_at'        => 'Created at',
            'created_at_helper' => ' ',
            'updated_at'        => 'Updated at',
            'updated_at_helper' => ' ',
            'deleted_at'        => 'Deleted at',
            'deleted_at_helper' => ' ',
        ],
    ],
    'role' => [
        'title'          => 'Grupos',
        'title_singular' => 'Função',
        'fields'         => [
            'id'                 => 'ID',
            'id_helper'          => ' ',
            'title'              => 'Title',
            'title_helper'       => ' ',
            'permissions'        => 'Permissions',
            'permissions_helper' => ' ',
            'created_at'         => 'Created at',
            'created_at_helper'  => ' ',
            'updated_at'         => 'Updated at',
            'updated_at_helper'  => ' ',
            'deleted_at'         => 'Deleted at',
            'deleted_at_helper'  => ' ',
        ],
    ],
    'user' => [
        'title'          => 'Utilizadores',
        'title_singular' => 'Utilizador',
        'fields'         => [
            'id'                       => 'ID',
            'id_helper'                => ' ',
            'name'                     => 'Name',
            'name_helper'              => ' ',
            'email'                    => 'Email',
            'email_helper'             => ' ',
            'email_verified_at'        => 'Email verified at',
            'email_verified_at_helper' => ' ',
            'password'                 => 'Password',
            'password_helper'          => ' ',
            'roles'                    => 'Roles',
            'roles_helper'             => ' ',
            'remember_token'           => 'Remember Token',
            'remember_token_helper'    => ' ',
            'locale'                   => 'Locale',
            'locale_helper'            => ' ',
            'created_at'               => 'Created at',
            'created_at_helper'        => ' ',
            'updated_at'               => 'Updated at',
            'updated_at_helper'        => ' ',
            'deleted_at'               => 'Deleted at',
            'deleted_at_helper'        => ' ',
        ],
    ],
    'store' => [
        'title'          => 'Lojas',
        'title_singular' => 'Loja',
        'fields'         => [
            'id'                       => 'ID',
            'id_helper'                => ' ',
            'name'                     => 'Name',
            'name_helper'              => ' ',
            'slug'                     => 'Slug',
            'slug_helper'              => ' ',
            'click_collect'            => 'Click & Collect',
            'click_collect_helper'     => ' ',
            'address'                  => 'Address',
            'address_helper'           => ' ',
            'locality'                 => 'Locality',
            'locality_helper'          => ' ',
            'zipcode'                  => 'Zip Code',
            'zipcode_helper'           => ' ',
            'distrito'                 => 'Distrito ID',
            'distrito_helper'          => ' ',
            'concelho'                 => 'Concelho ID',
            'concelho_helper'          => ' ',
            'phone_number'             => 'Phone Number',
            'phone_number_helper'      => ' ',
            'fax_number'               => 'Fax Number',
            'fax_number_helper'        => ' ',
            'main_email'               => 'Main Email',
            'main_email_helper'        => ' ',
            'secundary_email'          => 'Secundary Email',
            'secundary_email_helper'   => ' ',
            'recruitment_email'        => 'Recruitment Email',
            'recruitment_email_helper' => ' ',
            'schedule'                 => 'Schedule',
            'schedule_helper'          => ' ',
            'coordinates'              => 'Coordinates',
            'coordinates_helper'       => ' ',
            'created_at'               => 'Created at',
            'created_at_helper'        => ' ',
            'updated_at'               => 'Updated at',
            'updated_at_helper'        => ' ',
            'deleted_at'               => 'Deleted at',
            'deleted_at_helper'        => ' ',
        ],
    ],
    'product' => [
        'title'          => 'Produtos',
        'title_singular' => 'Produto',
        'fields'         => [
            'id'                => 'ID',
            'id_helper'         => ' ',
            'name'              => 'Name',
            'name_helper'       => ' ',
            'slug'              => 'Slug',
            'slug_helper'       => ' ',
            'created_at'        => 'Created at',
            'created_at_helper' => ' ',
            'updated_at'        => 'Updated at',
            'updated_at_helper' => ' ',
            'deleted_at'        => 'Deleted at',
            'deleted_at_helper' => ' ',
            'family'            => 'Family',
            'family_helper'     => ' ',
            'thumbnail'         => 'Thumbnail',
            'thumbnail_helper'  => ' ',
            'gallery'           => 'Gallery',
            'gallery_helper'    => ' ',
        ],
    ],
    'family' => [
        'title'          => 'Famílias',
        'title_singular' => 'Família',
        'fields'         => [
            'id'                 => 'ID',
            'id_helper'          => ' ',
            'name'               => 'Name',
            'name_helper'        => ' ',
            'slug'               => 'Slug',
            'slug_helper'        => ' ',
            'description'        => 'Description',
            'description_helper' => ' ',
            'created_at'         => 'Created at',
            'created_at_helper'  => ' ',
            'updated_at'         => 'Updated at',
            'updated_at_helper'  => ' ',
            'deleted_at'         => 'Deleted at',
            'deleted_at_helper'  => ' ',
            'parent'             => 'Parent',
            'parent_helper'      => ' ',
        ],
    ],
    'produto' => [
        'title'          => 'Produtos',
        'title_singular' => 'Produto',
    ],
];
