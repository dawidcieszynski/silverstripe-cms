<?php

/**
 * Catalan (Andorra) language pack
 * @package cms
 * @subpackage i18n
 */

i18n::include_locale_file('cms', 'en_US');

global $lang;

if(array_key_exists('ca_AD', $lang) && is_array($lang['ca_AD'])) {
	$lang['ca_AD'] = array_merge($lang['en_US'], $lang['ca_AD']);
} else {
	$lang['ca_AD'] = $lang['en_US'];
}

$lang['ca_AD']['AssetAdmin']['CHOOSEFILE'] = 'Trieu un fitxer';
$lang['ca_AD']['AssetAdmin']['DELETEDX'] = 'S\'han esborrat %s fitxers.%s';
$lang['ca_AD']['AssetAdmin']['FILESREADY'] = 'Fitxers llestos per a carregar:';
$lang['ca_AD']['AssetAdmin']['FOLDERDELETED'] = 'carpeta suprimida.';
$lang['ca_AD']['AssetAdmin']['FOLDERSDELETED'] = 'carpetes suprimides.';
$lang['ca_AD']['AssetAdmin']['MENUTITLE'] = 'Arxius & Imatges';
$lang['ca_AD']['AssetAdmin']['MENUTITLE'] = 'Fitxers i imatges';
$lang['ca_AD']['AssetAdmin']['MOVEDX'] = 'S\'han mogut %s fitxers';
$lang['ca_AD']['AssetAdmin']['NEWFOLDER'] = 'NovaCarpeta';
$lang['ca_AD']['AssetAdmin']['NOTEMP'] = 'No hi ha cap carpeta temporal per a càrregues. Si us plau, definiu upload_tmp_dir al php.ini.';
$lang['ca_AD']['AssetAdmin']['NOTHINGTOUPLOAD'] = 'No hi havia res a carregar';
$lang['ca_AD']['AssetAdmin']['NOWBROKEN'] = 'Les pàgines següents ara tenen enllaços trencats:';
$lang['ca_AD']['AssetAdmin']['NOWBROKEN2'] = 'Els seus propietaris han rebut un correu i arreglaran aquestes pàgines.';
$lang['ca_AD']['AssetAdmin']['SAVEDFILE'] = 'S\'ha desat el fitxer %s';
$lang['ca_AD']['AssetAdmin']['SAVEFOLDERNAME'] = 'Nom de la carpeta per desar';
$lang['ca_AD']['AssetAdmin']['THUMBSDELETED'] = 'Totes les miniatures no usades s\'han suprimit';
$lang['ca_AD']['AssetAdmin']['UPLOAD'] = 'Carrega els fitxers llistats a sota';
$lang['ca_AD']['AssetAdmin']['UPLOADEDX'] = 'S\'han carregat %s fitxers';
$lang['ca_AD']['AssetAdmin_left.ss']['CREATE'] = 'Crea';
$lang['ca_AD']['AssetAdmin_left.ss']['DELETE'] = 'Suprimeix';
$lang['ca_AD']['AssetAdmin_left.ss']['DELFOLDERS'] = 'Suprimeix les carpetes seleccionades';
$lang['ca_AD']['AssetAdmin_left.ss']['ENABLEDRAGGING'] = 'Permet reordenar arrossegant i deixant anar';
$lang['ca_AD']['AssetAdmin_left.ss']['FOLDERS'] = 'Carpetes';
$lang['ca_AD']['AssetAdmin_left.ss']['GO'] = 'Vés';
$lang['ca_AD']['AssetAdmin_left.ss']['SELECTTODEL'] = 'Seleccioneu les carpetes que voleu suprimir i després cliqueu el botó de sota';
$lang['ca_AD']['AssetAdmin_left.ss']['TOREORG'] = 'Per a reorganitzar les vostres carpetes, arrossegueu-les com desitgeu.';
$lang['ca_AD']['AssetAdmin_right.ss']['CHOOSEPAGE'] = 'Si us plau, trieu una pàgina de l\'esquerra.';
$lang['ca_AD']['AssetAdmin_right.ss']['WELCOME'] = 'Benvingut a';
$lang['ca_AD']['AssetAdmin_uploadiframe.ss']['PERMFAILED'] = 'No teniu permís per a carregar fitxers a aquesta carpeta.';
$lang['ca_AD']['AssetTableField']['CAPTION'] = 'Títol';
$lang['ca_AD']['AssetTableField']['CREATED'] = 'Carregat per primer cop';
$lang['ca_AD']['AssetTableField']['DIM'] = 'Dimensions';
$lang['ca_AD']['AssetTableField']['DIMLIMT'] = 'Limita les dimensions de la finestra emergent';
$lang['ca_AD']['AssetTableField']['FILENAME'] = 'Nom del fitxer';
$lang['ca_AD']['AssetTableField']['GALLERYOPTIONS'] = 'Opcions de la galeria';
$lang['ca_AD']['AssetTableField']['IMAGE'] = 'Imatge';
$lang['ca_AD']['AssetTableField']['ISFLASH'] = 'És un document flash';
$lang['ca_AD']['AssetTableField']['LASTEDIT'] = 'Darrer canvi';
$lang['ca_AD']['AssetTableField']['MAIN'] = 'Principal';
$lang['ca_AD']['AssetTableField']['NOLINKS'] = 'Aquest fitxer no ha estat enllaçat des de cap pàgina.';
$lang['ca_AD']['AssetTableField']['OWNER'] = 'Propietari';
$lang['ca_AD']['AssetTableField']['PAGESLINKING'] = 'Les següents pàgines enllacen cap a aquest fitxer';
$lang['ca_AD']['AssetTableField']['POPUPHEIGHT'] = 'Alçada de la finestra';
$lang['ca_AD']['AssetTableField']['POPUPWIDTH'] = 'Amplada de la finestra';
$lang['ca_AD']['AssetTableField']['SIZE'] = 'Mida';
$lang['ca_AD']['AssetTableField.ss']['DELFILE'] = 'Suprimeix aquest fitxer';
$lang['ca_AD']['AssetTableField.ss']['DRAGTOFOLDER'] = 'Arrossegueu a una carpeta de l\'esquerra per a moure el fitxer';
$lang['ca_AD']['AssetTableField.ss']['EDIT'] = 'Edita el recurs';
$lang['ca_AD']['AssetTableField.ss']['SHOW'] = 'Mostra el recurs';
$lang['ca_AD']['AssetTableField']['SWFFILEOPTIONS'] = 'Opcions del fitxer SWF';
$lang['ca_AD']['AssetTableField']['TITLE'] = 'Títol';
$lang['ca_AD']['AssetTableField']['TYPE'] = 'Tipus';
$lang['ca_AD']['AssetTableField']['URL'] = 'URL';
$lang['ca_AD']['CMSMain']['ACCESS'] = 'Accés a %s al SGC';
$lang['ca_AD']['CMSMain']['CANCEL'] = 'Cancel·la';
$lang['ca_AD']['CMSMain']['CHOOSEREPORT'] = '(Trieu un informe)';
$lang['ca_AD']['CMSMain']['COMPARINGV'] = 'Esteu comparant les versions #%d i #%d';
$lang['ca_AD']['CMSMain']['COPYPUBTOSTAGE'] = 'Voleu realment copiar el contingut publicat al lloc esborrany?';
$lang['ca_AD']['CMSMain']['DELETE'] = 'Suprimeix del lloc esborrany';
$lang['ca_AD']['CMSMain']['DESCREMOVED'] = 'i %s descendents';
$lang['ca_AD']['CMSMain']['EMAIL'] = 'Correu electrònic';
$lang['ca_AD']['CMSMain']['GO'] = 'Vés';
$lang['ca_AD']['LeftAndMain']['SITECONTENT'] = 'Contingut del lloc';
$lang['ca_AD']['CMSMain']['MENUTITLE'] = 'Contingut del web';
$lang['ca_AD']['CMSMain']['METADESCOPT'] = 'Descripció';
$lang['ca_AD']['CMSMain']['METAKEYWORDSOPT'] = 'Paraules clau';
$lang['ca_AD']['CMSMain']['NEW'] = 'Nova';
$lang['ca_AD']['CMSMain']['NOCONTENT'] = 'sense contingut';
$lang['ca_AD']['CMSMain']['NOTHINGASSIGNED'] = 'No tens res assignat.';
$lang['ca_AD']['CMSMain']['NOWAITINGON'] = 'No estàs esperant feina de ningú.';
$lang['ca_AD']['CMSMain']['NOWBROKEN'] = 'Les següents pàgines ara tenen enllaços trencats:';
$lang['ca_AD']['CMSMain']['NOWBROKEN2'] = 'Els seus propietaris han rebut un correu electrònic i arranjaran aquestes pàgines.';
$lang['ca_AD']['CMSMain']['OK'] = 'D\'acord';
$lang['ca_AD']['CMSMain']['PAGEDEL'] = '%d pàgina eliminada';
$lang['ca_AD']['CMSMain']['PAGENOTEXISTS'] = 'Aquesta pàgina no existeix';
$lang['ca_AD']['CMSMain']['PAGEPUB'] = '%d pàgina publicada';
$lang['ca_AD']['CMSMain']['PAGESDEL'] = '%d pàgines eliminades';
$lang['ca_AD']['CMSMain']['PAGESPUB'] = '%d pàgines publicades';
$lang['ca_AD']['CMSMain']['PAGETYPEOPT'] = 'Tipus de pàgina';
$lang['ca_AD']['CMSMain']['PRINT'] = 'Imprimeix';
$lang['ca_AD']['CMSMain']['PUBALLCONFIRM'] = 'Publica cada pàgina del lloc web, copiant el contingut cap a la versió publicada';
$lang['ca_AD']['CMSMain']['PUBALLFUN'] = 'Funcionalitat de "Publica-ho tot"';
$lang['ca_AD']['CMSMain']['PUBALLFUN2'] = 'Prémer aquest botó farà l\'equivalent a anar a cada pàgina i prémer "Publica". És pràctic d\'usar quan hi ha hagut edicions massives del contingut, com ara quan el lloc web s\'ha fet per primer cop.';
$lang['ca_AD']['CMSMain']['PUBPAGES'] = 'Fet: s\'han publicat %d pàgines';
$lang['ca_AD']['CMSMain']['REMOVED'] = 'S\'ha suprimit \'%s\'%s del lloc publicat';
$lang['ca_AD']['CMSMain']['REMOVEDFD'] = 'Eliminat del lloc esborrany';
$lang['ca_AD']['CMSMain']['REMOVEDPAGE'] = 'S\'ha eliminat \'%s\' del lloc publicat';
$lang['ca_AD']['CMSMain']['REMOVEDPAGEFROMDRAFT'] = 'S\'ha suprimit  \'%s\' del lloc esborrany';
$lang['ca_AD']['CMSMain']['REPORT'] = 'Informe';
$lang['ca_AD']['CMSMain']['RESTORED'] = 'S\'ha restaurat la pàgina \'%s\' amb èxit';
$lang['ca_AD']['CMSMain']['ROLLBACK'] = 'Torna a aquesta versió';
$lang['ca_AD']['CMSMain']['ROLLEDBACKPUB'] = 'S\'ha tornat a la versió publicada. El nou número de versió és #%d';
$lang['ca_AD']['CMSMain']['ROLLEDBACKVERSION'] = 'S\'ha tornat a la versió #%d. El nou número de versió és #%d';
$lang['ca_AD']['CMSMain']['SAVE'] = 'Desa';
$lang['ca_AD']['CMSMain']['SENTTO'] = 'S\'ha enviat a %s %s per a l\'aprovació';
$lang['ca_AD']['CMSMain']['STATUSOPT'] = 'Estat';
$lang['ca_AD']['CMSMain']['TOTALPAGES'] = 'Pàgines en total:';
$lang['ca_AD']['CMSMain']['VERSIONSNOPAGE'] = 'No es pot trobar la pàgina #%d';
$lang['ca_AD']['CMSMain']['VIEWING'] = 'Esteu veient la versió #%d, creada el %s';
$lang['ca_AD']['CMSMain']['VISITRESTORE'] = 'visiteu restorepage/(ID)';
$lang['ca_AD']['CMSMain']['WAITINGON'] = 'Estàs esperant a que altra gent treballi en aquestes <b>%d</b> pàgines.';
$lang['ca_AD']['CMSMain']['WORKTODO'] = 'Tens feina a fer en aquestes <b>%d</b> pàgines.';
$lang['ca_AD']['CMSMain_dialog.ss']['BUTTONNOTFOUND'] = 'No s\'ha pogut trobar el nom del botó';
$lang['ca_AD']['CMSMain_dialog.ss']['NOLINKED'] = 'No s\'ha pogut trobar window.linkedObject per a enviar el clic al botó a la finestra principal';
$lang['ca_AD']['CMSMain_left.ss']['ADDEDNOTPUB'] = 'S\'ha afegit al lloc esborrany i encara no està publicat';
$lang['ca_AD']['CMSMain_left.ss']['ADDSEARCHCRITERIA'] = 'Afegeix un criteri...';
$lang['ca_AD']['CMSMain_left.ss']['BATCHACTIONS'] = 'Quantitat Accio';
$lang['ca_AD']['CMSMain_left.ss']['CHANGED'] = 'canviat';
$lang['ca_AD']['CMSMain_left.ss']['CLOSEBOX'] = 'premeu per tancar la caixa';
$lang['ca_AD']['CMSMain_left.ss']['COMPAREMODE'] = 'Mode de comparació (trieu-ne 2 de sota)';
$lang['ca_AD']['CMSMain_left.ss']['CREATE'] = 'Crea...';
$lang['ca_AD']['CMSMain_left.ss']['DEL'] = 'eliminat';
$lang['ca_AD']['CMSMain_left.ss']['DELETECONFIRM'] = 'Suprimeix les pàgines seleccionades';
$lang['ca_AD']['CMSMain_left.ss']['DELETEDSTILLLIVE'] = 'S\'ha suprimit del lloc esborrany però encara està al lloc publicat';
$lang['ca_AD']['CMSMain_left.ss']['EDITEDNOTPUB'] = 'S\'ha editat al lloc esborrany i no està encara publicat';
$lang['ca_AD']['CMSMain_left.ss']['EDITEDSINCE'] = 'Editat des de';
$lang['ca_AD']['CMSMain_left.ss']['ENABLEDRAGGING'] = 'Permete arrossegar; Baixa Reordenar';
$lang['ca_AD']['CMSMain_left.ss']['GO'] = 'Vés';
$lang['ca_AD']['CMSMain_left.ss']['KEY'] = 'Clau:';
$lang['ca_AD']['CMSMain_left.ss']['NEW'] = 'nou';
$lang['ca_AD']['CMSMain_left.ss']['OPENBOX'] = 'premeu per obrir aquesta caixa';
$lang['ca_AD']['CMSMain_left.ss']['PAGEVERSIONH'] = 'Historial de pàgina';
$lang['ca_AD']['CMSMain_left.ss']['PUBLISHCONFIRM'] = 'Publica les pàgines seleccionades';
$lang['ca_AD']['CMSMain_left.ss']['SEARCH'] = 'Cerca';
$lang['ca_AD']['CMSMain_left.ss']['SEARCHTITLE'] = 'Cerca a través de la URL, Títol, Títol de menú i Contingut';
$lang['ca_AD']['CMSMain_left.ss']['SELECTPAGESACTIONS'] = 'Seleccioneu les pàgines que voleu canviar i després cliqueu una acció:';
$lang['ca_AD']['CMSMain_left.ss']['SHOWONLYCHANGED'] = 'Mostra només pàgines canviades';
$lang['ca_AD']['CMSMain_left.ss']['SHOWUNPUB'] = 'Mostra versions no publicades';
$lang['ca_AD']['CMSMain_left.ss']['SITECONTENT TITLE'] = 'Contingut del lloc i estructura';
$lang['ca_AD']['CMSMain_left.ss']['SITEREPORTS'] = 'Informes del lloc';
$lang['ca_AD']['CMSMain_right.ss']['ANYMESSAGE'] = 'Teniu algun missatge per al vostre editor?';
$lang['ca_AD']['CMSMain_right.ss']['CHOOSEPAGE'] = 'Si us plau, trieu una pàgina de l\'esquerra.';
$lang['ca_AD']['CMSMain_right.ss']['LOADING'] = 's\'està carregant...';
$lang['ca_AD']['CMSMain_right.ss']['MESSAGE'] = 'Missatge';
$lang['ca_AD']['CMSMain_right.ss']['SENDTO'] = 'Envia a';
$lang['ca_AD']['CMSMain_right.ss']['STATUS'] = 'Estat';
$lang['ca_AD']['CMSMain_right.ss']['SUBMIT'] = 'Envia per a aprovació';
$lang['ca_AD']['CMSMain_right.ss']['WELCOMETO'] = 'Benvingut a';
$lang['ca_AD']['CMSMain_versions.ss']['AUTHOR'] = 'Autor';
$lang['ca_AD']['CMSMain_versions.ss']['NOTPUB'] = 'No publicat';
$lang['ca_AD']['CMSMain_versions.ss']['PUBR'] = 'Publicador';
$lang['ca_AD']['CMSMain_versions.ss']['UNKNOWN'] = 'Desconegut';
$lang['ca_AD']['CMSMain_versions.ss']['WHEN'] = 'Quan';
$lang['ca_AD']['CommentAdmin']['ACCEPT'] = 'Accepta';
$lang['ca_AD']['CommentAdmin']['APPROVED'] = 'S\'han acceptat %s comentaris.';
$lang['ca_AD']['CommentAdmin']['APPROVEDCOMMENTS'] = 'Comentaris aprovats';
$lang['ca_AD']['CommentAdmin']['AUTHOR'] = 'Autor';
$lang['ca_AD']['CommentAdmin']['COMMENT'] = 'Comentari';
$lang['ca_AD']['CommentAdmin']['COMMENTS'] = 'Comentaris';
$lang['ca_AD']['CommentAdmin']['COMMENTSAWAITINGMODERATION'] = 'Comentaris esperant moderació';
$lang['ca_AD']['CommentAdmin']['DATEPOSTED'] = 'Data d\'enviament';
$lang['ca_AD']['CommentAdmin']['DELETE'] = 'Suprimeix';
$lang['ca_AD']['CommentAdmin']['DELETEALL'] = 'Suprimeix-los tots';
$lang['ca_AD']['CommentAdmin']['DELETED'] = 'S\'ha esborrat %s comentaris.';
$lang['ca_AD']['CommentAdmin']['MARKASNOTSPAM'] = 'Marca com a no spam';
$lang['ca_AD']['CommentAdmin']['MARKEDNOTSPAM'] = 'S\'han marcat %s comentaris com a no brossa.';
$lang['ca_AD']['CommentAdmin']['MARKEDSPAM'] = 'S\'han marcat %s comentaris com a brossa.';
$lang['ca_AD']['CommentAdmin']['MENUTITLE'] = 'Comentaris';
$lang['ca_AD']['CommentAdmin']['MENUTITLE'] = 'Comentaris';
$lang['ca_AD']['CommentAdmin']['NAME'] = 'Nom';
$lang['ca_AD']['CommentAdmin']['PAGE'] = 'Pàgina';
$lang['ca_AD']['CommentAdmin']['SPAM'] = 'Spam';
$lang['ca_AD']['CommentAdmin']['SPAMMARKED'] = 'Marca com a spam';
$lang['ca_AD']['CommentAdmin_left.ss']['COMMENTS'] = 'Comentaris';
$lang['ca_AD']['CommentAdmin_right.ss']['WELCOME1'] = 'Benvingut a la gestió de comentaris de';
$lang['ca_AD']['CommentAdmin_right.ss']['WELCOME2'] = '. Si us  plau, seleccioneu una carpeta de l\'esquerra.';
$lang['ca_AD']['CommentAdmin_SiteTree.ss']['APPROVED'] = 'Aprovat';
$lang['ca_AD']['CommentAdmin_SiteTree.ss']['AWAITMODERATION'] = 'Esperant moderació';
$lang['ca_AD']['CommentAdmin_SiteTree.ss']['COMMENTS'] = 'Comentaris';
$lang['ca_AD']['CommentAdmin_SiteTree.ss']['SPAM'] = 'Spam';
$lang['ca_AD']['CommentList.ss']['CREATEDW'] = 'Els comentaris es creen quan es realitza una de les "accions de treball" - Publicar, Rebutjar, Enviar.';
$lang['ca_AD']['CommentList.ss']['NOCOM'] = 'No hi ha comentaris en aquesta pàgina.';
$lang['ca_AD']['CommentTableField']['FILTER'] = 'Filtre';
$lang['ca_AD']['CommentTableField']['SEARCH'] = 'Cerca';
$lang['ca_AD']['CommentTableField.ss']['APPROVE'] = 'aprova';
$lang['ca_AD']['CommentTableField.ss']['APPROVECOMMENT'] = 'Aprova aquest comentari';
$lang['ca_AD']['CommentTableField.ss']['DELETE'] = 'suprimeix';
$lang['ca_AD']['CommentTableField.ss']['DELETEROW'] = 'Suprimeix aquesta fila';
$lang['ca_AD']['CommentTableField.ss']['EDIT'] = 'edita';
$lang['ca_AD']['CommentTableField.ss']['HAM'] = 'ham';
$lang['ca_AD']['CommentTableField.ss']['MARKASSPAM'] = 'Marca aquest comentari com a brossa';
$lang['ca_AD']['CommentTableField.ss']['MARKNOSPAM'] = 'Marca aquest comentari com a no brossa';
$lang['ca_AD']['CommentTableField.ss']['NOITEMSFOUND'] = 'No s\'han trobat elements';
$lang['ca_AD']['CommentTableField.ss']['SPAM'] = 'spam';
$lang['ca_AD']['ComplexTableField']['CLOSEPOPUP'] = 'Tanca la finestra';
$lang['ca_AD']['ComplexTableField']['SUCCESSADD'] = 'Afegit %s %s %s';
$lang['ca_AD']['ImageEditor.ss']['ACTIONS'] = 'accions';
$lang['ca_AD']['ImageEditor.ss']['ADJUST'] = 'ajusta';
$lang['ca_AD']['ImageEditor.ss']['APPLY'] = 'aplica';
$lang['ca_AD']['ImageEditor.ss']['BLUR'] = 'difumina';
$lang['ca_AD']['ImageEditor.ss']['BRIGHTNESS'] = 'brillantor';
$lang['ca_AD']['ImageEditor.ss']['CANCEL'] = 'cancel·la';
$lang['ca_AD']['ImageEditor.ss']['CONTRAST'] = 'contrast';
$lang['ca_AD']['ImageEditor.ss']['CROP'] = 'retalla';
$lang['ca_AD']['ImageEditor.ss']['CURRENTACTION'] = 'acció&nbsp;actual';
$lang['ca_AD']['ImageEditor.ss']['EDITFUNCTIONS'] = 'edita&nbsp;funcions';
$lang['ca_AD']['ImageEditor.ss']['EFFECTS'] = 'efectes';
$lang['ca_AD']['ImageEditor.ss']['EXIT'] = 'surt';
$lang['ca_AD']['ImageEditor.ss']['GAMMA'] = 'gamma';
$lang['ca_AD']['ImageEditor.ss']['GREYSCALE'] = 'escala de grisos';
$lang['ca_AD']['ImageEditor.ss']['HEIGHT'] = 'alçada';
$lang['ca_AD']['ImageEditor.ss']['REDO'] = 'refés';
$lang['ca_AD']['ImageEditor.ss']['ROT'] = 'rota';
$lang['ca_AD']['ImageEditor.ss']['SAVE'] = 'desa&nbsp;la&nbsp;imatge';
$lang['ca_AD']['ImageEditor.ss']['SEPIA'] = 'sèpia';
$lang['ca_AD']['ImageEditor.ss']['UNDO'] = 'desfés';
$lang['ca_AD']['ImageEditor.ss']['UNTITLED'] = 'Document sense títol';
$lang['ca_AD']['ImageEditor.ss']['WIDTH'] = 'amplada';
$lang['ca_AD']['LeftAndMain']['CHANGEDURL'] = 'S\'ha canviat l\'URL a \'%s\'';
$lang['ca_AD']['LeftAndMain']['HELP'] = 'Ajuda';
$lang['ca_AD']['LeftAndMain']['PAGETYPE'] = 'Tipus de pàgina:';
$lang['ca_AD']['LeftAndMain']['PERMAGAIN'] = 'Heu estat desconnectat del SGC. Si voleu entrar de nou, introduïu un nom d\'usuari i contrasenya a sota';
$lang['ca_AD']['LeftAndMain']['PERMALREADY'] = 'Lamentant-ho molt, no podeu accedir a aquesta part del SGC. Si voleu entrar com a algú altre, feu-ho a sota';
$lang['ca_AD']['LeftAndMain']['PERMDEFAULT'] = 'Introduïu la vostra adreça de correu electrònic i la contrasenya per a entrar al SGC.';
$lang['ca_AD']['LeftAndMain']['PLEASESAVE'] = 'Si us plau, deseu la pàgina: aquesta pàgina no s\'ha pogut actualitzar perquè encara no s\'ha desat.';
$lang['ca_AD']['LeftAndMain']['REQUESTERROR'] = 'Hi ha hagut un error a la petició';
$lang['ca_AD']['LeftAndMain']['SAVED'] = 's\'ha desat';
$lang['ca_AD']['LeftAndMain']['SAVEDUP'] = 'S\'ha desat';
$lang['ca_AD']['LeftAndMain']['SITECONTENTLEFT'] = 'Contigut de Lloc';
$lang['ca_AD']['LeftAndMain.ss']['APPVERSIONTEXT1'] = 'Aquesta és la ';
$lang['ca_AD']['LeftAndMain.ss']['APPVERSIONTEXT2'] = 'versió que esteu executant, tècnicament és la branca CVS';
$lang['ca_AD']['LeftAndMain.ss']['ARCHS'] = 'Lloc arxivat';
$lang['ca_AD']['LeftAndMain.ss']['DRAFTS'] = 'Lloc esborrany';
$lang['ca_AD']['LeftAndMain.ss']['EDIT'] = 'Edita';
$lang['ca_AD']['LeftAndMain.ss']['EDITINCMS'] = 'Edita aquesta pàgina al SGC';
$lang['ca_AD']['LeftAndMain.ss']['EDITPROFILE'] = 'Perfil';
$lang['ca_AD']['LeftAndMain.ss']['LOADING'] = 'S\'està carregant...';
$lang['ca_AD']['LeftAndMain.ss']['LOGGEDINAS'] = 'Connectat com a';
$lang['ca_AD']['LeftAndMain.ss']['LOGOUT'] = 'desconnecta';
$lang['ca_AD']['LeftAndMain.ss']['PUBLIS'] = 'Lloc publicat';
$lang['ca_AD']['LeftAndMain.ss']['REQUIREJS'] = 'El gestor de continguts requereix que tingueu JavaScript habilitat.';
$lang['ca_AD']['LeftAndMain.ss']['SSWEB'] = 'Web de Silverstripe';
$lang['ca_AD']['LeftAndMain.ss']['VIEWINDRAFT'] = 'Veure aquesta pàgina al lloc esborrany';
$lang['ca_AD']['LeftAndMain.ss']['VIEWINPUBLISHED'] = 'Veure aquesta pàgina al lloc publicat';
$lang['ca_AD']['LeftAndMain.ss']['VIEWPAGEIN'] = 'Vista de pàgina:';
$lang['ca_AD']['LeftAndMain']['STATUSTO'] = 'S\'ha canviat l\'estat a \'%s\'';
$lang['ca_AD']['LeftAndMain']['TREESITECONTENT'] = 'Contigut de Lloc';
$lang['ca_AD']['MemberList.ss']['FILTER'] = 'Filtrar';
$lang['ca_AD']['MemberList_PageControls.ss']['DISPLAYING'] = 'S\'està mostrant';
$lang['ca_AD']['MemberList_PageControls.ss']['FIRSTMEMBERS'] = 'membres';
$lang['ca_AD']['MemberList_PageControls.ss']['LASTMEMBERS'] = 'membres';
$lang['ca_AD']['MemberList_PageControls.ss']['NEXTMEMBERS'] = 'membres';
$lang['ca_AD']['MemberList_PageControls.ss']['OF'] = 'de';
$lang['ca_AD']['MemberList_PageControls.ss']['PREVIOUSMEMBERS'] = 'membres';
$lang['ca_AD']['MemberList_PageControls.ss']['TO'] = 'a';
$lang['ca_AD']['MemberList_PageControls.ss']['VIEWFIRST'] = 'Veure els primers';
$lang['ca_AD']['MemberList_PageControls.ss']['VIEWLAST'] = 'Veure els darrers';
$lang['ca_AD']['MemberList_PageControls.ss']['VIEWNEXT'] = 'Veure els següents';
$lang['ca_AD']['MemberList_PageControls.ss']['VIEWPREVIOUS'] = 'Veure els anteriors';
$lang['ca_AD']['MemberList_Table.ss']['EMAIL'] = 'Adreça de correu-e';
$lang['ca_AD']['MemberList_Table.ss']['FN'] = 'Nom';
$lang['ca_AD']['MemberList_Table.ss']['PASSWD'] = 'Contrasenya';
$lang['ca_AD']['MemberList_Table.ss']['SN'] = 'Cognom';
$lang['ca_AD']['MemberTableField']['ADD'] = 'Afegeix';
$lang['ca_AD']['MemberTableField']['ADDEDTOGROUP'] = 'S\'ha afegit el membre al grup';
$lang['ca_AD']['MemberTableField']['ADDINGFIELD'] = 'No s\'ha pogut afegir';
$lang['ca_AD']['MemberTableField']['ANYGROUP'] = 'Qualsevol grup';
$lang['ca_AD']['MemberTableField']['ASC'] = 'Ascendent';
$lang['ca_AD']['MemberTableField']['DESC'] = 'Descendent';
$lang['ca_AD']['MemberTableField']['EMAIL'] = 'Correu electrònic';
$lang['ca_AD']['MemberTableField']['FILTER'] = 'Filtra';
$lang['ca_AD']['MemberTableField']['FILTERBYGROUP'] = 'Filtra per grup';
$lang['ca_AD']['MemberTableField']['FIRSTNAME'] = 'Nom';
$lang['ca_AD']['MemberTableField']['ORDERBY'] = 'Ordena per';
$lang['ca_AD']['MemberTableField']['SEARCH'] = 'Cerca';
$lang['ca_AD']['MemberTableField.ss']['ADDNEW'] = 'Agrege Nova';
$lang['ca_AD']['MemberTableField.ss']['DELETEMEMBER'] = 'Suprimeix aquest membre';
$lang['ca_AD']['MemberTableField.ss']['EDITMEMBER'] = 'Edita aquest membre';
$lang['ca_AD']['MemberTableField.ss']['SHOWMEMBER'] = 'Mostra aquest membre';
$lang['ca_AD']['MemberTableField']['SURNAME'] = 'Cognom';
$lang['ca_AD']['ModelAdmin']['ADDBUTTON'] = 'Afegeix';
$lang['ca_AD']['ModelAdmin']['ADDFORM'] = 'Ompliu aquest formulari per a afegir un %s a la base de dades.';
$lang['ca_AD']['ModelAdmin']['CHOOSE_COLUMNS'] = 'Selecciona les columnes de resultats..';
$lang['ca_AD']['ModelAdmin']['CLEAR_SEARCH'] = 'Neteja la cerca';
$lang['ca_AD']['ModelAdmin']['CREATEBUTTON'] = 'Crea un/a \'%s\'';
$lang['ca_AD']['ModelAdmin']['DELETE'] = 'Suprimeix';
$lang['ca_AD']['ModelAdmin']['DELETEDRECORDS'] = 'S\'ha suprimit %s registres.';
$lang['ca_AD']['ModelAdmin']['FOUNDRESULTS'] = 'La vostra cerca ha trobat %s elements concordants';
$lang['ca_AD']['ModelAdmin']['GOBACK'] = 'Torna';
$lang['ca_AD']['ModelAdmin']['GOFORWARD'] = 'Endavant';
$lang['ca_AD']['ModelAdmin']['IMPORT'] = 'Importa de CSV';
$lang['ca_AD']['ModelAdmin']['IMPORTEDRECORDS'] = 'S\'han importat %s registres.';
$lang['ca_AD']['ModelAdmin']['ITEMNOTFOUND'] = 'No es pot trobar aquest element';
$lang['ca_AD']['ModelAdmin']['LOADEDFOREDITING'] = 'S\'ha carregat \'%s\' per a editar.';
$lang['ca_AD']['ModelAdmin']['NOCSVFILE'] = 'Si us plau, cerqueu el fitxer CSV per a importar';
$lang['ca_AD']['ModelAdmin']['NOIMPORT'] = 'No hi ha res a importar';
$lang['ca_AD']['ModelAdmin']['NORESULTS'] = 'La vostra cerca no ha retornat cap element concordant';
$lang['ca_AD']['ModelAdmin']['SAVE'] = 'Desa';
$lang['ca_AD']['ModelAdmin']['SEARCHRESULTS'] = 'Resultats de la cerca';
$lang['ca_AD']['ModelAdmin']['SELECTALL'] = 'selecciona-ho tot';
$lang['ca_AD']['ModelAdmin']['SELECTNONE'] = 'no seleccionis res';
$lang['ca_AD']['ModelAdmin']['UPDATEDRECORDS'] = 'S\'han actualitzat %s registres.';
$lang['ca_AD']['ModelAdmin_ImportSpec.ss']['IMPORTSPECFIELDS'] = 'Columnes de la base de dades';
$lang['ca_AD']['ModelAdmin_ImportSpec.ss']['IMPORTSPECLINK'] = 'Mostra l\'especificació per a %s';
$lang['ca_AD']['ModelAdmin_ImportSpec.ss']['IMPORTSPECRELATIONS'] = 'Relacions';
$lang['ca_AD']['ModelAdmin_ImportSpec.ss']['IMPORTSPECTITLE'] = 'Especificació per a %s';
$lang['ca_AD']['ModelAdmin_left.ss']['ADDLISTING'] = 'Afegeix un llistat';
$lang['ca_AD']['ModelAdmin_left.ss']['IMPORT_TAB_HEADER'] = 'Importa';
$lang['ca_AD']['ModelAdmin_left.ss']['SEARCHLISTINGS'] = 'Llistats de cerca';
$lang['ca_AD']['ModelAdmin_right.ss']['WELCOME1'] = 'Benvingut a %s. Si us plau, trieu una de les entrades del panell esquerra.';
$lang['ca_AD']['PageComment']['Comment'] = 'Comentari';
$lang['ca_AD']['PageComment']['COMMENTBY'] = 'Comentari de \'%s\' a %s';
$lang['ca_AD']['PageComment']['IsSpam'] = 'Spam?';
$lang['ca_AD']['PageComment']['Name'] = 'Nom de l\'autor';
$lang['ca_AD']['PageComment']['NeedsModeration'] = 'Necessita moderació?';
$lang['ca_AD']['PageComment']['PLURALNAME'] = 'Comentaris de pàgina';
$lang['ca_AD']['PageComment']['SINGULARNAME'] = 'Comentari de pàgina';
$lang['ca_AD']['PageCommentInterface']['POST'] = 'Envia';
$lang['ca_AD']['PageCommentInterface']['SPAMQUESTION'] = 'Pregunta de protecció d\'spam: %s';
$lang['ca_AD']['PageCommentInterface.ss']['COMMENTS'] = 'Comentaris';
$lang['ca_AD']['PageCommentInterface.ss']['NEXT'] = 'següent';
$lang['ca_AD']['PageCommentInterface.ss']['NOCOMMENTSYET'] = 'Encara ningú ha fet un comentari en aquesta pàgina.';
$lang['ca_AD']['PageCommentInterface.ss']['POSTCOM'] = 'Envia el comentari';
$lang['ca_AD']['PageCommentInterface.ss']['PREV'] = 'anterior';
$lang['ca_AD']['PageCommentInterface.ss']['RSSFEEDCOMMENTS'] = 'Font RSS per a comentaris d\'aquesta pàgina';
$lang['ca_AD']['PageCommentInterface']['YOURCOMMENT'] = 'Comentaris';
$lang['ca_AD']['PageCommentInterface']['YOURNAME'] = 'El vostre nom';
$lang['ca_AD']['PageCommentInterface_Controller']['SPAMQUESTION'] = 'Pregunta de protecció d\'spam: %s';
$lang['ca_AD']['PageCommentInterface_Form']['AWAITINGMODERATION'] = 'El vostre comentari s\'ha enviat i ara està pendent de moderació.';
$lang['ca_AD']['PageCommentInterface_Form']['MSGYOUPOSTED'] = 'El missatge que heu enviat era:';
$lang['ca_AD']['PageCommentInterface_Form']['SPAMDETECTED'] = 'S\'ha detectat spam!!';
$lang['ca_AD']['PageCommentInterface_singlecomment.ss']['APPROVE'] = 'aprova aquest comentari';
$lang['ca_AD']['PageCommentInterface_singlecomment.ss']['ISNTSPAM'] = 'aquest comentari no és spam';
$lang['ca_AD']['PageCommentInterface_singlecomment.ss']['ISSPAM'] = 'aquest comentari és spam';
$lang['ca_AD']['PageCommentInterface_singlecomment.ss']['PBY'] = 'Enviar per';
$lang['ca_AD']['PageCommentInterface_singlecomment.ss']['REMCOM'] = 'suprimeix aquest comentari';
$lang['ca_AD']['ReportAdmin']['MENUTITLE'] = 'Informes';
$lang['ca_AD']['ReportAdmin_left.ss']['REPORTS'] = 'Informes';
$lang['ca_AD']['ReportAdmin_right.ss']['WELCOME1'] = 'Benvingut a la secció d\'informes del';
$lang['ca_AD']['ReportAdmin_right.ss']['WELCOME2'] = '. Si us plau, trieu un informe específic de l\'esquerra.';
$lang['ca_AD']['ReportAdmin_SiteTree.ss']['REPORTS'] = 'Informes';
$lang['ca_AD']['SecurityAdmin']['ADDMEMBER'] = 'Afegeix un membre';
$lang['ca_AD']['SecurityAdmin']['EDITPERMISSIONS'] = 'Edita els permisos i les adreces IP de cada grup';
$lang['ca_AD'][''][''] = 'Seguretat';
$lang['ca_AD']['SecurityAdmin']['MENUTITLE'] = 'Seguretat';
$lang['ca_AD']['SecurityAdmin']['NEWGROUP'] = 'Nou grup';
$lang['ca_AD']['SecurityAdmin']['SAVE'] = 'Desa';
$lang['ca_AD']['SecurityAdmin']['SGROUPS'] = 'Grups de seguretat';
$lang['ca_AD']['SecurityAdmin_left.ss']['CREATE'] = 'Crea';
$lang['ca_AD']['SecurityAdmin_left.ss']['DEL'] = 'Suprimeix';
$lang['ca_AD']['SecurityAdmin_left.ss']['DELGROUPS'] = 'Suprimeix els grups seleccionats';
$lang['ca_AD']['SecurityAdmin_left.ss']['ENABLEDRAGGING'] = 'Permet reordenar arrossegant i deixant anar';
$lang['ca_AD']['SecurityAdmin_left.ss']['GO'] = 'Vés';
$lang['ca_AD']['SecurityAdmin_left.ss']['SECGROUPS'] = 'Grups de seguretat';
$lang['ca_AD']['SecurityAdmin_left.ss']['SELECT'] = 'Seleccioneu les pàgines que voleu suprimir i després feu clic al botó de sota';
$lang['ca_AD']['SecurityAdmin_left.ss']['TOREORG'] = 'Per a reorganitzar el vostre lloc, arrossegueu les pàgines tal com desitgeu.';
$lang['ca_AD']['SecurityAdmin_right.ss']['WELCOME1'] = 'Benvingut a la secció d\'administració de la seguretat del';
$lang['ca_AD']['SecurityAdmin_right.ss']['WELCOME2'] = '. Si us plau, trieu un grup de l\'esquerra.';
$lang['ca_AD']['SideReport']['EMPTYPAGES'] = 'Pàgines buides';
$lang['ca_AD']['SideReport']['LAST2WEEKS'] = 'Pàgines editades les dues darreres setmanes';
$lang['ca_AD']['SideReport']['REPEMPTY'] = 'El informe de % es buit';
$lang['ca_AD']['SideReport']['TODO'] = 'Per fer';
$lang['ca_AD']['StaticExporter']['BASEURL'] = 'URL Base';
$lang['ca_AD']['StaticExporter']['EXPORTTO'] = 'Exporta a aquella carpeta';
$lang['ca_AD']['StaticExporter']['FOLDEREXPORT'] = 'Carpeta on exportar';
$lang['ca_AD']['StaticExporter']['NAME'] = 'Exportador estàtic';
$lang['ca_AD']['TableListField_PageControls.ss']['DISPLAYING'] = 'S\'està mostrant';
$lang['ca_AD']['TableListField_PageControls.ss']['OF'] = 'de';
$lang['ca_AD']['TableListField_PageControls.ss']['TO'] = 'a';
$lang['ca_AD']['TableListField_PageControls.ss']['VIEWFIRST'] = 'Veure el primer';
$lang['ca_AD']['TableListField_PageControls.ss']['VIEWLAST'] = 'Veure el darrer';
$lang['ca_AD']['TableListField_PageControls.ss']['VIEWNEXT'] = 'Veure el següent';
$lang['ca_AD']['TableListField_PageControls.ss']['VIEWPREVIOUS'] = 'Veure l\'anterior';
$lang['ca_AD']['ThumbnailStripField']['NOFLASHFOUND'] = 'No s\'han trobat fitxers flash';
$lang['ca_AD']['ThumbnailStripField']['NOFOLDERFLASHFOUND'] = 'No s\'han trobat fitxers flash a';
$lang['ca_AD']['ThumbnailStripField']['NOFOLDERIMAGESFOUND'] = 'No s\'han trobat imatges a';
$lang['ca_AD']['ThumbnailStripField']['NOIMAGESFOUND'] = 'No s\'han trobat imatges a';
$lang['ca_AD']['ThumbnailStripField.ss']['CHOOSEFOLDER'] = '(Trieu una carpeta a dalt)';
$lang['ca_AD']['ViewArchivedEmail.ss']['CANACCESS'] = 'Podeu accedir al lloc arxivat en aquesta adreça:';
$lang['ca_AD']['ViewArchivedEmail.ss']['HAVEASKED'] = 'Heu demanat de veure el contingut del nostre lloc el';
$lang['ca_AD']['WaitingOn.ss']['ATO'] = 'assignat a';
$lang['ca_AD']['WidgetAreaEditor.ss']['AVAILABLE'] = 'Ginys disponibles';
$lang['ca_AD']['WidgetAreaEditor.ss']['INUSE'] = 'Ginys usats actualment';
$lang['ca_AD']['WidgetAreaEditor.ss']['NOAVAIL'] = 'Actualment no hi ha ginys disponibles.';
$lang['ca_AD']['WidgetAreaEditor.ss']['TOADD'] = 'Per a afegir ginys, arrossegueu-los des de l\'esquerra a aquí.';
$lang['ca_AD']['WidgetEditor.ss']['DELETE'] = 'Suprimeix';

?>