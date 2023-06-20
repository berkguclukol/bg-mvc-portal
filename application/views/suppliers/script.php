<script>
    $(() => {
        DevExpress.localization.locale(navigator.language);

        $('#grid').dxDataGrid({
            dataSource: DevExpress.data.AspNet.createStore({
                key: 'SupplierID',
                loadUrl: `${SITE_URL}suppliersmodel/load`,
                insertUrl: `${SITE_URL}suppliersmodel/insert`,
                updateUrl: `${SITE_URL}suppliersmodel/update`,
                deleteUrl: `${SITE_URL}suppliersmodel/delete`,
                onBeforeSend(method, ajaxOptions) {
                    ajaxOptions.xhrFields = {withCredentials: true};
                }
            }),
            columns: [
                {
                    dataField: 'SupplierID',
                    caption: 'ID'
                }, {
                    dataField: 'SupplierName',
                    caption: 'Supplier Name'
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
                    dataField: 'Phone',
                    caption: 'Phone'
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