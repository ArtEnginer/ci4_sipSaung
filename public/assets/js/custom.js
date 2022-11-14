$(document).ready(function () {
  $(".datatables-init").DataTable({
    responsive: true,
    order: [[0, "asc"]],
    scrollY: true,
    scrollX: true,
  });
  $(".datatables-laporan").DataTable({
    responsive: true,
    dom: "Bfrtip",
    buttons: [
      {
        extend: "excelHtml5",
        title: "Laporan Data",
        exportOptions: {
          columns: [0, 1, 2, 3, 4, 5, 6, 7, 8, 9, 10, 11, 12,13,14,15,16],
        },
      },
      {
        extend: "pdfHtml5",
        title: "Laporan Data",
        exportOptions: {
          columns: [0, 1, 2, 3, 4, 5, 6, 7, 8, 9, 10, 11, 12,13,14,15,16],
        },
      },
      {
        extend: "print",
        title: "Laporan Data",
        exportOptions: {
          columns: [0, 1, 2, 3, 4, 5, 6, 7, 8, 9, 10, 11, 12,13,14,15,16],
        },
      },
  
    ],

    order: [[0, "asc"]],
    scrollY: true,
    scrollX: true,
  });
});
