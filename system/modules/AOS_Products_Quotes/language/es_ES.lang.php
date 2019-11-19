<?php
/**
 *
 * SugarCRM Community Edition is a customer relationship management program developed by
 * SugarCRM, Inc. Copyright (C) 2004-2013 SugarCRM Inc.
 *
 * SuiteCRM is an extension to SugarCRM Community Edition developed by SalesAgility Ltd.
 * Copyright (C) 2011 - 2019 SalesAgility Ltd.
 *
 * This program is free software; you can redistribute it and/or modify it under
 * the terms of the GNU Affero General Public License version 3 as published by the
 * Free Software Foundation with the addition of the following permission added
 * to Section 15 as permitted in Section 7(a): FOR ANY PART OF THE COVERED WORK
 * IN WHICH THE COPYRIGHT IS OWNED BY SUGARCRM, SUGARCRM DISCLAIMS THE WARRANTY
 * OF NON INFRINGEMENT OF THIRD PARTY RIGHTS.
 *
 * This program is distributed in the hope that it will be useful, but WITHOUT
 * ANY WARRANTY; without even the implied warranty of MERCHANTABILITY or FITNESS
 * FOR A PARTICULAR PURPOSE. See the GNU Affero General Public License for more
 * details.
 *
 * You should have received a copy of the GNU Affero General Public License along with
 * this program; if not, see http://www.gnu.org/licenses or write to the Free
 * Software Foundation, Inc., 51 Franklin Street, Fifth Floor, Boston, MA
 * 02110-1301 USA.
 *
 * You can contact SugarCRM, Inc. headquarters at 10050 North Wolfe Road,
 * SW2-130, Cupertino, CA 95014, USA. or at email address contact@sugarcrm.com.
 *
 * The interactive user interfaces in modified source and object code versions
 * of this program must display Appropriate Legal Notices, as required under
 * Section 5 of the GNU Affero General Public License version 3.
 *
 * In accordance with Section 7(b) of the GNU Affero General Public License version 3,
 * these Appropriate Legal Notices must retain the display of the "Powered by
 * SugarCRM" logo and "Supercharged by SuiteCRM" logo. If the display of the logos is not
 * reasonably feasible for technical reasons, the Appropriate Legal Notices must
 * display the words "Powered by SugarCRM" and "Supercharged by SuiteCRM".
 */

if (!defined('sugarEntry') || !sugarEntry) {
    die('Not A Valid Entry Point');
}

$mod_strings = array(
    'LBL_ASSIGNED_TO_ID' => 'Id de usuario asignado',
    'LBL_ASSIGNED_TO_NAME' => 'Asignado a',
    'LBL_ID' => 'ID',
    'LBL_DATE_ENTERED' => 'Fecha de Creación',
    'LBL_DATE_MODIFIED' => 'Fecha de Modificación',
    'LBL_MODIFIED' => 'Modificado Por',
    'LBL_MODIFIED_NAME' => 'Modificado Por Nombre',
    'LBL_CREATED' => 'Creado Por',
    'LBL_DESCRIPTION' => 'Descripción',
    'LBL_DELETED' => 'Eliminado',
    'LBL_NAME' => 'Nombre',
    'LBL_NUMBER' => 'Número', //PR 3296
    'LBL_CREATED_USER' => 'Creado por el Usuario',
    'LBL_MODIFIED_USER' => 'Modificado por el Usuario',
    'LBL_LIST_FORM_TITLE' => 'Lista de cotizaciones de productos',
    'LBL_MODULE_NAME' => 'Items de Línea',
    'LBL_MODULE_TITLE' => 'Cotizaciones de Productos: Inicio',
    'LBL_HOMEPAGE_TITLE' => 'Mis Cotizaciones de Productos',
    'LNK_NEW_RECORD' => 'Crear Cotización de Producto',
    'LNK_LIST' => 'Cotizaciones de productos',
    'LBL_SEARCH_FORM_TITLE' => 'Buscar Cotizaciones de Productos',
    'LBL_HISTORY_SUBPANEL_TITLE' => 'Ver Historial',
    'LBL_ACTIVITIES_SUBPANEL_TITLE' => 'Actividades',
    'LBL_NEW_FORM_TITLE' => 'Nuevo Cotización de Producto',
    'LBL_PRODUCT_NAME' => 'Nombre',
    'LBL_PRODUCT_NUMBER' => 'Número', //PR 3296
    'LBL_PRODUCT_QTY' => 'Cantidad',
    'LBL_PRODUCT_COST_PRICE' => 'Precio de Costo',
    'LBL_PRODUCT_LIST_PRICE' => 'Precio de Lista',
    'LBL_PRODUCT_UNIT_PRICE' => 'Precio Unitario',
    'LBL_PRODUCT_DISCOUNT' => 'Descuento',
    'LBL_PRODUCT_DISCOUNT_AMOUNT' => 'Cantidad del Descuento',
    'LBL_PART_NUMBER' => 'Número de Parte',
    'LBL_PRODUCT_DESCRIPTION' => 'Descripción',
    'LBL_DISCOUNT' => 'Tipo de Descuento',
    'LBL_VAT_AMT' => 'Cantidad del Iva',
    'LBL_VAT' => 'Iva',
    'LBL_PRODUCT_TOTAL_PRICE' => 'Precio Total',
    'LBL_PRODUCT_NOTE' => 'Nota',
    'Quote' => '',
    'LBL_FLEX_RELATE' => 'Relacionado a',
    'LBL_PRODUCT' => 'Producto',

    'LBL_SERVICE_MODULE_NAME' => 'Servicios',
    'LBL_SERVICE_NUMBER' => 'Número', //PR 3296
    'LBL_LIST_NUM' => 'No.',
    'LBL_PARENT_ID' => 'ID Padre',
    'LBL_GROUP_NAME' => 'Grupo',
    'LBL_GROUP_DESCRIPTION' => 'Descripción', //PR 3296
    'LBL_PRODUCT_COST_PRICE_USDOLLAR' => 'Precio de costo (moneda predeterminada)',
    'LBL_PRODUCT_LIST_PRICE_USDOLLAR' => 'Precio de lista (moneda predeterminada)',
    'LBL_PRODUCT_UNIT_PRICE_USDOLLAR' => 'Precio unitario (moneda predeterminada)',
    'LBL_PRODUCT_TOTAL_PRICE_USDOLLAR' => 'Precio total (moneda predeterminada)',
    'LBL_PRODUCT_DISCOUNT_USDOLLAR' => 'Descuento (moneda predeterminada)',
    'LBL_PRODUCT_DISCOUNT_AMOUNT_USDOLLAR' => 'Importe de Descuento (moneda predeterminada)',
    'LBL_VAT_AMT_USDOLLAR' => 'Importe del Impuesto (moneda predeterminada)',
    'LBL_PRODUCTS_SERVICES' => 'Producto / Servicio',
    'LBL_PRODUCT_ID' => 'ID de producto',

    'LBL_AOS_CONTRACTS' => 'Contratos',
    'LBL_AOS_INVOICES' => 'Facturas',
    'LBL_AOS_PRODUCTS' => 'Productos',
    'LBL_AOS_QUOTES' => 'Presupuestos',
);