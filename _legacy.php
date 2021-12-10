<?php
/**
 * @package Clearbricks
 *
 * Backwards compatibility with clearbricks < 2.0
 *
 * @copyright Olivier Meunier & Association Dotclear
 * @copyright GPL-2.0-only
 * @version 1.2
 */

$src = dirname(__FILE__) . '/src';

# Autoload
$__autoload = [
    'l10n'                => $src . '/Common/L10n.php',
    'crypt'               => $src . '/Common/Crypt.php',
    'dt'                  => $src . '/Common/Dt.php',
    'files'               => $src . '/Common/Files.php',
    'path'                => $src . '/Common/Path.php',
    'form'                => $src . '/Common/Form.php',
    'formSelectOption'    => $src . '/Common/FormSelectOption.php',
    'forms'               => $src . '/Common/Forms.php',
    'formsSelectOption'   => $src . '/Common/FormsSelectOption.php',
    'html'                => $src . '/Common/Html.php',
    'http'                => $src . '/Common/Http.php',
    'text'                => $src . '/Common/Text.php',

    'cursor'              => $src . '/Database/Layer/Cursor.php',
    'i_dbLayer'           => $src . '/Database/Layer/InterfaceLayer.php',
    'dbLayer'             => $src . '/Database/Layer/Layer.php',
    'record'              => $src . '/Database/Layer/Record.php',
    'staticRecord'        => $src . '/Database/Layer/StaticRecord.php',

    'mysqliConnection'    => $src . '/Database/Layer/Driver/Mysqli.php',
    'mysqlimb4Connection' => $src . '/Database/Layer/Driver/Mysqlimb4.php',
    'mysqliConnection'    => $src . '/Database/Layer/Driver/Pgsql.php',
    'sqliteConnection'    => $src . '/Database/Layer/Driver/Sqlite.php',

    'dbStruct'            => $src . '/Database/Schema/Struct.php',
    'dbStructTable'       => $src . '/Database/Schema/StructTable.php',
    'i_dbSchema'          => $src . '/Database/Schema/InterfaceSchema.php',
    'dbSchema'            => $src . '/Database/Schema/Schema.php',

    'mysqliSchema'        => $src . '/Database/Schema/Driver/Mysqli.php',
    'mysqlimb4Schema'     => $src . '/Database/Schema/Driver/Mysqlimb4.php',
    'pgsqlSchema'         => $src . '/Database/Schema/Driver/Pgsql.php',
    'sqliteSchema'        => $src . '/Database/Schema/Driver/Sqlite.php',

    'diff'                => $src . '/Diff/Diff.php',
    'tidyDiff'            => $src . '/Diff/TidyDiff.php',
    'tidyDiffChunk'       => $src . '/Diff/TidyDiffChunk.php',
    'tidyDiffLine'        => $src . '/Diff/TidyDiffLine.php',

    'filemanager'         => $src . '/FileManager/FileManager.php',
    'fileItem'            => $src . '/FileManager/FileItem.php',

    'imageMeta'           => $src . '/Image/ImageMeta.php',
    'imageTools'          => $src . '/Image/ImageTools.php',

    'sessionDB'           => $src . '/Session/SessionDb.php',
];

# Feed Reader
$__autoload['feedParser'] = dirname(__FILE__) . '/legacy/net.http.feed/class.feed.parser.php';
$__autoload['feedReader'] = dirname(__FILE__) . '/legacy/net.http.feed/class.feed.reader.php';

# HTML Filter
$__autoload['htmlFilter'] = dirname(__FILE__) . '/legacy/html.filter/class.html.filter.php';

# HTML Validator
$__autoload['htmlValidator'] = dirname(__FILE__) . '/legacy/html.validator/class.html.validator.php';

# Send Mail Utilities
$__autoload['mail'] = dirname(__FILE__) . '/legacy/mail/class.mail.php';

# Mail Convert and Rewrap
$__autoload['mailConvert'] = dirname(__FILE__) . '/legacy/mail.convert/class.mail.convert.php';

# Send Mail Through Sockets
$__autoload['socketMail'] = dirname(__FILE__) . '/legacy/mail/class.socket.mail.php';

# Mime Message Parser
$__autoload['mimeMessage'] = dirname(__FILE__) . '/legacy/mail.mime/class.mime.message.php';

# HTML Pager
$__autoload['pager'] = dirname(__FILE__) . '/legacy/pager/class.pager.php';

# REST Server
$__autoload['restServer'] = dirname(__FILE__) . '/legacy/rest/class.rest.php';
$__autoload['xmlTag']     = dirname(__FILE__) . '/legacy/rest/class.rest.php';

# Simple Template Systeme
$__autoload['template']               = dirname(__FILE__) . '/legacy/template/class.template.php';
$__autoload['tplNode']                = dirname(__FILE__) . '/legacy/template/class.tplnode.php';
$__autoload['tplNodeBlock']           = dirname(__FILE__) . '/legacy/template/class.tplnodeblock.php';
$__autoload['tplNodeText']            = dirname(__FILE__) . '/legacy/template/class.tplnodetext.php';
$__autoload['tplNodeValue']           = dirname(__FILE__) . '/legacy/template/class.tplnodevalue.php';
$__autoload['tplNodeBlockDefinition'] = dirname(__FILE__) . '/legacy/template/class.tplnodeblockdef.php';
$__autoload['tplNodeValueParent']     = dirname(__FILE__) . '/legacy/template/class.tplnodevalueparent.php';

# URL Handler
$__autoload['urlHandler'] = dirname(__FILE__) . '/legacy/url.handler/class.url.handler.php';

# Wiki to XHTML Converter
$__autoload['wiki2xhtml'] = dirname(__FILE__) . '/legacy/text.wiki2xhtml/class.wiki2xhtml.php';

# SQL Batch on XML Files
$__autoload['xmlsql'] = dirname(__FILE__) . '/legacy/xmlsql/class.xmlsql.php';

# Common Socket Class
$__autoload['netSocket'] = dirname(__FILE__) . '/legacy/net/class.net.socket.php';

# HTTP Client
$__autoload['netHttp']    = dirname(__FILE__) . '/legacy/net.http/class.net.http.php';
$__autoload['HttpClient'] = dirname(__FILE__) . '/legacy/net.http/class.net.http.php';

# NNTP Client
$__autoload['netNntp']     = dirname(__FILE__) . '/legacy/net.nntp/class.net.nntp.php';
$__autoload['nntpMessage'] = dirname(__FILE__) . '/legacy/net.nntp/class.nntp.message.php';

# XML-RPC Client and Server
$__autoload['IXR_Value']               = dirname(__FILE__) . '/legacy/ext/incutio.ixr_library.php';
$__autoload['IXR_Message']             = dirname(__FILE__) . '/legacy/ext/incutio.ixr_library.php';
$__autoload['IXR_Server']              = dirname(__FILE__) . '/legacy/ext/incutio.ixr_library.php';
$__autoload['IXR_Request']             = dirname(__FILE__) . '/legacy/ext/incutio.ixr_library.php';
$__autoload['IXR_Client']              = dirname(__FILE__) . '/legacy/ext/incutio.ixr_library.php';
$__autoload['IXR_Error']               = dirname(__FILE__) . '/legacy/ext/incutio.ixr_library.php';
$__autoload['IXR_Date']                = dirname(__FILE__) . '/legacy/ext/incutio.ixr_library.php';
$__autoload['IXR_Base64']              = dirname(__FILE__) . '/legacy/ext/incutio.ixr_library.php';
$__autoload['IXR_IntrospectionServer'] = dirname(__FILE__) . '/legacy/ext/incutio.ixr_library.php';
$__autoload['IXR_ClientMulticall']     = dirname(__FILE__) . '/legacy/ext/incutio.ixr_library.php';

$__autoload['xmlrpcValue']               = dirname(__FILE__) . '/legacy/net.xmlrpc/class.net.xmlrpc.php';
$__autoload['xmlrpcMessage']             = dirname(__FILE__) . '/legacy/net.xmlrpc/class.net.xmlrpc.php';
$__autoload['xmlrpcRequest']             = dirname(__FILE__) . '/legacy/net.xmlrpc/class.net.xmlrpc.php';
$__autoload['xmlrpcDate']                = dirname(__FILE__) . '/legacy/net.xmlrpc/class.net.xmlrpc.php';
$__autoload['xmlrpcBase64']              = dirname(__FILE__) . '/legacy/net.xmlrpc/class.net.xmlrpc.php';
$__autoload['xmlrpcClient']              = dirname(__FILE__) . '/legacy/net.xmlrpc/class.net.xmlrpc.php';
$__autoload['xmlrpcClientMulticall']     = dirname(__FILE__) . '/legacy/net.xmlrpc/class.net.xmlrpc.php';
$__autoload['xmlrpcServer']              = dirname(__FILE__) . '/legacy/net.xmlrpc/class.net.xmlrpc.php';
$__autoload['xmlrpcIntrospectionServer'] = dirname(__FILE__) . '/legacy/net.xmlrpc/class.net.xmlrpc.php';

# Zip tools
$__autoload['fileUnzip'] = dirname(__FILE__) . '/legacy/zip/class.unzip.php';
$__autoload['fileZip']   = dirname(__FILE__) . '/legacy/zip/class.zip.php';

# HTML Form helpers
$__autoload['formComponent'] = dirname(__FILE__) . '/legacy/html.form/class.form.component.php';
$__autoload['formForm']      = dirname(__FILE__) . '/legacy/html.form/class.form.form.php';
$__autoload['formTextarea']  = dirname(__FILE__) . '/legacy/html.form/class.form.textarea.php';
$__autoload['formInput']     = dirname(__FILE__) . '/legacy/html.form/class.form.input.php';
$__autoload['formCheckbox']  = dirname(__FILE__) . '/legacy/html.form/class.form.checkbox.php';
$__autoload['formColor']     = dirname(__FILE__) . '/legacy/html.form/class.form.color.php';
$__autoload['formDate']      = dirname(__FILE__) . '/legacy/html.form/class.form.date.php';
$__autoload['formDatetime']  = dirname(__FILE__) . '/legacy/html.form/class.form.datetime.php';
$__autoload['formEmail']     = dirname(__FILE__) . '/legacy/html.form/class.form.email.php';
$__autoload['formFile']      = dirname(__FILE__) . '/legacy/html.form/class.form.file.php';
$__autoload['formHidden']    = dirname(__FILE__) . '/legacy/html.form/class.form.hidden.php';
$__autoload['formNumber']    = dirname(__FILE__) . '/legacy/html.form/class.form.number.php';
$__autoload['formPassword']  = dirname(__FILE__) . '/legacy/html.form/class.form.password.php';
$__autoload['formRadio']     = dirname(__FILE__) . '/legacy/html.form/class.form.radio.php';
$__autoload['formTime']      = dirname(__FILE__) . '/legacy/html.form/class.form.time.php';
$__autoload['formUrl']       = dirname(__FILE__) . '/legacy/html.form/class.form.url.php';
$__autoload['formLabel']     = dirname(__FILE__) . '/legacy/html.form/class.form.label.php';
$__autoload['formFieldset']  = dirname(__FILE__) . '/legacy/html.form/class.form.fieldset.php';
$__autoload['formLegend']    = dirname(__FILE__) . '/legacy/html.form/class.form.legend.php';
$__autoload['formSelect']    = dirname(__FILE__) . '/legacy/html.form/class.form.select.php';
$__autoload['formOptgroup']  = dirname(__FILE__) . '/legacy/html.form/class.form.optgroup.php';
$__autoload['formOption']    = dirname(__FILE__) . '/legacy/html.form/class.form.option.php';

# autoload for clearbricks
function cb_autoload($name)
{
    global $__autoload;

    if (isset($__autoload[$name])) {
        require_once $__autoload[$name];
    }
}
spl_autoload_register('cb_autoload');
