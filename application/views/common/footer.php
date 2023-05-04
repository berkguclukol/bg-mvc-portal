<script>const SITE_URL = "<?=SITE_URL?>";</script>
<script src="<?=PUBLIC_ROOT?>vendor/jquery/jquery-2.2.4.min.js"></script>
<script src="<?=PUBLIC_ROOT?>vendor/bootstrap-5.3.0-alpha3/js/bootstrap.bundle.min.js"></script>
<!-- DevExtreme library -->
<script src="<?=PUBLIC_ROOT?>vendor/devextreme-22.2.3/js/polyfill.min.js"></script>
<script src="<?=PUBLIC_ROOT?>vendor/devextreme-22.2.3/js/exceljs.min.js"></script>
<script src="<?=PUBLIC_ROOT?>vendor/devextreme-22.2.3/js/FileSaver.min.js"></script>
<script src="<?=PUBLIC_ROOT?>vendor/devextreme-22.2.3/js/dx.all.js"></script>
<script src="<?=PUBLIC_ROOT?>vendor/devextreme-22.2.3/js/dx.messages.tr.js"></script>
<script src="<?=PUBLIC_ROOT?>vendor/devextreme-22.2.3/js/dx.aspnet.data.js"></script>
<script>
    $(() => {
        DevExpress.localization.locale(navigator.language);

        $('#grid').dxDataGrid({
            dataSource: DevExpress.data.AspNet.createStore({
                key: 'CustomerID',
                loadUrl: `${SITE_URL}customersmodel/load`,
                insertUrl: `${SITE_URL}customersmodel/insert`,
                updateUrl: `${SITE_URL}customersmodel/update`,
                deleteUrl: `${SITE_URL}customersmodel/delete`,
                onBeforeSend(method, ajaxOptions) {
                    ajaxOptions.xhrFields = {withCredentials: true};
                }
            }),
            columns: [
                {
                    dataField: 'CustomerID',
                    caption: 'ID'
                }, {
                    dataField: 'CustomerName',
                    caption: 'Name'
                }, {
                    dataField: 'ContactName',
                    caption: 'Contact Name'
                }, {
                    dataField: 'Address',
                    caption: 'Address'
                }, {
                    dataField: 'City',
                    caption: 'City'
                }, {
                    dataField: 'PostalCode',
                    caption: 'Postal Code'
                }, {
                    dataField: 'Country',
                    caption: 'Country'
                },{
                    type: "buttons",
                    buttons: [
                        {
                            name: "edit",
                            cssClass: "btn btn-sm btn-primary"
                        }, {
                            name: "delete",
                            cssClass: "btn btn-sm btn-danger"
                        }, {
                            name: "save",
                            cssClass: "btn btn-sm btn-primary"
                        }, {
                            name: "cancel",
                            cssClass: "btn btn-sm btn-primary"
                        }
                    ]
                }
            ],
            showBorders: true,
            rowAlternationEnabled: true,
            paging: {
                pageSize: 10,
            },
            pager: {
                visible: true,
                allowedPageSizes: [10, 20, 50, 100, 'all'],
                showPageSizeSelector: true,
                showInfo: true,
                showNavigationButtons: true,
                displayMode: "full"
            },
            groupPanel: {
                visible: true,
            },
            searchPanel: {
                visible: true,
            },
            editing: {
                mode: 'form',
                allowUpdating: true,
                allowDeleting: true,
                allowAdding: true
            }
        });
    });
</script>

</body>
</html>