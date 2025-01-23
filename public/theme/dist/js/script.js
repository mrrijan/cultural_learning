$(function() {
    var companySelector = $('#companySelect');
    var userId = $('#userId').val();
    var companyIdField = $('#companyID');

    // URL to fetch JSON data from
    var jsonUrl = `/api/user/${userId}/companies`;


    // Fetch the JSON data and populate the select element
    $.getJSON(jsonUrl, function(data) {
        // Iterate through the JSON data and append options to the select element
        $.each(data.data, function(index, company) {
            var option = $('<option></option>')
                .attr('value', company.id)
                .text(company.title);
            companySelector.append(option);
        });

        // Check if there is a stored company ID in localStorage and set it as the selected option
        var storedCompanyId = localStorage.getItem('company_id');
        if (storedCompanyId) {
            companySelector.val(storedCompanyId);
            companyIdField.val(storedCompanyId);
        }
    }).fail(function() {
        console.error("An error occurred while fetching the JSON data.");
    });

    // Add event listener for change event on the select element
    companySelector.change(function() {
        var selectedCompanyId = $(this).val();
        if (selectedCompanyId) {
            localStorage.setItem('company_id', selectedCompanyId);
            // var currentUrl = window.location.href;
            //
            // var newUrl = currentUrl.replace(/\/\d+\//, '/' + selectedCompanyId + '/');

            window.location.href = ('/');
        }
    });

});
document.addEventListener("DOMContentLoaded", function () {
    const userSelector = document.getElementById("userSelector");
    const userIdField = document.getElementById("userId");
    const saveButton = document.getElementById("saveButton");

    userSelector.addEventListener("change", function () {
        const selectedUserId = userSelector.value;
        if (selectedUserId) {
            window.location.href = `/company-user/edit/${selectedUserId}`;
        } else {
            userIdField.value = '';
            saveButton.disabled = true;
        }
    });
});

$(document).ready(function() {

    function populateCompaniesDropdown(companyId = null) {
        $.ajax({
            url: '/api/companiess',
            type: 'GET',
            dataType: 'json',
            success: function (data) {
                var dropdown = $('.companiesDropdown');
                dropdown.empty();
                $.each(data, function (index, companies) {
                    console.log("Companies:", companies); // Log each array of companies
                    $.each(companies, function (i, company) {
                        dropdown.append($('<option>', {
                            value: company.id,
                            text: company.title,
                            selected: company.id === companyId
                        }));
                    });
                });
            },
            error: function (xhr, status, error) {
                console.error("Error fetching companies:", error);
            }
        });
    }
    //for ad types


    $('.edit-ad-type-btn').on('click', function(e) {
        e.preventDefault();
        var button = $(this);
        var id = button.data('id');
        var title = button.data('title');
        var companyId = button.data('company_id');
        console.log(button.data)
        populateCompaniesDropdown(companyId)
    });

});
