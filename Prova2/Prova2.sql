CREATE database Prova2;

use Prova2;

drop table if exists fluxo_caixa;
create table fluxo_caixa
(
	id			INTEGER 		not null auto_increment,
    data		date 			not null,
    tipo		varchar(10)		not null,
    valor 		decimal(10,2)	not null,
    historico	varchar(150) 	not null,
    cheque 		varchar(3) 		not null,
    primary key (id)
) ;