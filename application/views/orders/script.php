<script>
    $(() => {
        DevExpress.localization.locale(navigator.language);

        $('#grid').dxDataGrid({
            dataSource: DevExpress.data.AspNet.createStore({
                key: 'OrderID',
                loadUrl: `${SITE_URL}ordersmodel/load`,
                insertUrl: `${SITE_URL}ordersmodel/insert`,
                updateUrl: `${SITE_URL}ordersmodel/update`,
                deleteUrl: `${SITE_URL}ordersmodel/delete`,
                onBeforeSend(method, ajaxOptions) {
                    ajaxOptions.xhrFields = {withCredentials: true};
                }
            }),
            columns: [{
                    dataField: 'OrderID',
                    caption: 'Order ID'
                }, {
                    dataField: 'CustomerID',
                    caption: 'Customer ID'
                }, {
                    dataField: 'EmployeeID',
                    caption: 'Employee ID'
                }, {
                    dataField: 'OrderDate',
                    caption: 'Order Date'
                },{
                    dataField: 'ShipperID',
                    caption: 'Shipper ID'
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