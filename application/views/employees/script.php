<script>
    $(() => {
        DevExpress.localization.locale(navigator.language);

        $('#grid').dxDataGrid({
            dataSource: DevExpress.data.AspNet.createStore({
                key: 'EmployeeID',
                loadUrl: `${SITE_URL}employeesModel/load`,
                insertUrl: `${SITE_URL}employeesModel/insert`,
                updateUrl: `${SITE_URL}employeesModel/update`,
                deleteUrl: `${SITE_URL}employeesModel/delete`,
                onBeforeSend(method, ajaxOptions) {
                    ajaxOptions.xhrFields = {withCredentials: true};
                }
            }),
            columns: [
                {
                    dataField: 'Photo',
                    caption: 'Photo',
                    alignment: "center",
                    cellTemplate(container, options) {
                        $('<div>')
                            .append($('<img>', { src: options.value }))
                            .appendTo(container);
                    },
                }, {
                    dataField: 'FirstName',
                    caption: 'First Name'
                }, {
                    dataField: 'LastName',
                    caption: 'Last Name'
                }, {
                    dataField: 'BirthDate',
                    caption: 'Birth Date'
                }, , {
                    dataField: 'Notes',
                    caption: 'Notes'
                }, {
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