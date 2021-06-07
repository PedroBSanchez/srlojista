create table clientes (
    id_cliente int,
    nome varchar2(70),
    data_nascimento date,
    sexo varchar2(30),
    cpf varchar2(11),
    constraint pk_clientes primary key (id_cliente)
);

create table telefones (
    id_telefone int,
    numero varchar2(15),
    id_cliente int,
    constraint pk_telefones primary key (id_telefone),
    constraint fk_telefonesClientes foreign key (id_cliente) references clientes(id_cliente)
    
);

create table enderecos (
    id_endereco int,
    cep varchar2(10),
    cidade varchar2(50),
    bairro varchar2(50),
    logradouro varchar2(70),
    numero int,
    id_cliente int,
    constraint pk_enderecos primary key (id_endereco),
    constraint fk_enderecosClientes foreign key (id_cliente) references clientes(id_cliente)
);


create table produtos (
    id_produto int,
    nome varchar2(70),
    vl_venda float,
    vl_custo float,
    quantidade_estoque int,
    constraint pk_produtos primary key (id_produto)
);


create table pedidos (
    id_pedido int,
    data_pedido date,
    id_cliente int,
    constraint pk_pedidos primary key (id_pedido),
    constraint fk_clientesPedidos foreign key (id_cliente) references clientes(id_cliente) 
    
);


create table itens_pedido (
    id_pedido int,
    id_produto int,
    constraint fk_itensPedidos foreign key (id_pedido) references pedidos(id_pedido),
    constraint fk_itensProdutos foreign key (id_produto) references produtos(id_produto)
);









