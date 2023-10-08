select * from tbl_clientes;
select * from tbl_articulos;

select * from tbl_articulos where id_codigoArticulo = 7;

/*PARA LA PAGINA DE FACTURACIÓN*/

use dbfacturacion;

select * from tbl_facturas;
select * from tbl_clientes;

select id_numeroFactura from tbl_facturas order by id_numeroFactura desc limit 1;
insert into tbl_facturas (id_numeroCliente, fecha) values ("4", "2023-08-07");

select * from tbl_clientes where nit = "123456";

select * from tbl_articulos;
select * from tbl_articulos where id_codigoArticulo = "3";
select id_codigoArticulo from tbl_articulos where id_codigoArticulo = "3"

