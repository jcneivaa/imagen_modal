
plugin.tx_imagenmodal_imagenmodal {
    view {
        # cat=plugin.tx_imagenmodal_imagenmodal/file; type=string; label=Path to template root (FE)
        templateRootPath = EXT:imagen_modal/Resources/Private/Templates/
        # cat=plugin.tx_imagenmodal_imagenmodal/file; type=string; label=Path to template partials (FE)
        partialRootPath = EXT:imagen_modal/Resources/Private/Partials/
        # cat=plugin.tx_imagenmodal_imagenmodal/file; type=string; label=Path to template layouts (FE)
        layoutRootPath = EXT:imagen_modal/Resources/Private/Layouts/
    }
    persistence {
        # cat=plugin.tx_imagenmodal_imagenmodal//a; type=string; label=Default storage PID
        storagePid =
    }
}
