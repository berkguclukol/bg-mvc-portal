<script>
    $(() => {
        DevExpress.localization.locale(navigator.language);

        $('#grid').dxDataGrid({
            dataSource: DevExpress.data.AspNet.createStore({
                key: 'ProductID',
                loadUrl: `${SITE_URL}productsmodel/load`,
                insertUrl: `${SITE_URL}productsmodel/insert`,
                updateUrl: `${SITE_URL}productsmodel/update`,
                deleteUrl: `${SITE_URL}productsmodel/delete`,
                onBeforeSend(method, ajaxOptions) {
                    ajaxOptions.xhrFields = {withCredentials: true};
                }
            }),
            columns: [{
                    dataField: 'ProductID',
                    caption: 'ProductID'
                }, {
                    dataField: 'ProductName',
                    caption: 'Product Name'
                }, {
                    dataField: 'SupplierName',
                    caption: 'Supplier Name',
                    alignment: "center"
                }, {
                    dataField: 'CategoryName',
                    caption: 'Category Name',
                    alignment: "center"
                },{
                    dataField: 'Unit',
                    caption: 'Unit'
                },{
                    dataField: 'Price',
                    caption: 'Price',
                    alignment: "right"
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