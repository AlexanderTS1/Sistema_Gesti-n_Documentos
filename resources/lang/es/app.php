<?php

/*
|--------------------------------------------------------------------------
| Textos de la interfaz que dependen de valores internos
|--------------------------------------------------------------------------
|
| Los estados y permisos se guardan en inglés en la base de datos (se usan
| como claves), aquí solo se traduce cómo se muestran al usuario.
|
*/

return [

    'status' => [
        'PENDING' => 'PENDIENTE',
        'ACTIVE' => 'ACTIVO',
        'BLOCK' => 'BLOQUEADO',
        'REJECT' => 'RECHAZADO',
        'APPROVED' => 'APROBADO',
    ],

    'permissions' => [
        'create' => 'crear',
        'read' => 'ver',
        'update' => 'editar',
        'delete' => 'eliminar',
        'verify' => 'verificar',
        'permission management' => 'gestionar permisos',
    ],

    'settings' => [
        'system_title' => 'Título del sistema',
        'system_logo' => 'Logo del sistema',
        'tags_label_singular' => 'Nombre para etiqueta (singular)',
        'tags_label_plural' => 'Nombre para etiquetas (plural)',
        'document_label_singular' => 'Nombre para documento (singular)',
        'document_label_plural' => 'Nombre para documentos (plural)',
        'file_label_singular' => 'Nombre para archivo (singular)',
        'file_label_plural' => 'Nombre para archivos (plural)',
        'default_file_validations' => 'Validaciones de archivo por defecto',
        'default_file_maxsize' => 'Tamaño máximo de archivo por defecto (MB)',
        'image_files_resize' => 'Tamaños de redimensión de imágenes (px)',
        'show_missing_files_errors' => 'Mostrar avisos de archivos faltantes',
    ],

];
