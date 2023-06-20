<script>
    $(() => {
        DevExpress.localization.locale(navigator.language);

        $('#grid').dxDataGrid({
            dataSource: DevExpress.data.AspNet.createStore({
                key: 'ShipperID',
                loadUrl: `${SITE_URL}shippersmodel/load`,
                insertUrl: `${SITE_URL}shippersmodel/insert`,
                updateUrl: `${SITE_URL}shippersmodel/update`,
                deleteUrl: `${SITE_URL}shippersmodel/delete`,
                onBeforeSend(method, ajaxOptions) {
                    ajaxOptions.xhrFields = {withCredentials: true};
                }
            }),
            columns: [
                {
                    dataField: 'ShipperID',
                    caption: 'ID'
                }, {
                    dataField: 'ShipperName',
                    caption: 'Name'
                }, {
                    dataField: 'Phone',
                    caption: 'Contact Name'
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