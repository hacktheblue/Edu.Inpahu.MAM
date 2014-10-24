/*==============================================================*/
/* DBMS name:      MySQL 5.0                                    */
/* Created on:     03/10/2014 17:05:50                          */
/*==============================================================*/


drop trigger TRIGGER_1;

drop table if exists ADJUNTO;

drop table if exists AREAS;

drop table if exists ASIGNADO;

drop table if exists BASECONOCIMIENTO;

drop table if exists CALIFICACION;

drop table if exists CAMPOSRUTINAS;

drop table if exists CATCASOS;

drop table if exists CATEVSESTADOS;

drop table if exists DIVSUBCATEGORIAS;

drop table if exists ESTADOS;

drop table if exists HISTORICOFECHAS;

drop table if exists LOGAUDITORIA;

drop table if exists ORIGENSOLICITUD;

drop table if exists RELAREACORD;

drop table if exists RELCATEST;

drop table if exists RELROLUSUCATVSESTADO;

drop table if exists RELRUTCAT;

drop table if exists REQUERIMIENTO;

drop table if exists ROLESUSUARIOS;

drop table if exists ROLUSUCAT;

drop table if exists RUTINAS;

drop table if exists SEGUIMIENTOS;

drop table if exists SUBCATEGORIA;

drop table if exists TIPIFICACIONCASOS;

drop table if exists USUARIOS;

/*==============================================================*/
/* Table: ADJUNTO                                               */
/*==============================================================*/
create table ADJUNTO
(
   ADJ_ID               integer not null,
   SEG_ID               integer,
   REQ_DIRARCHIVO       varchar(200) not null,
   REQ_ACT              boolean not null,
   primary key (ADJ_ID)
);

alter table ADJUNTO comment 'R9,R10,R11,R12,R14';

/*==============================================================*/
/* Table: AREAS                                                 */
/*==============================================================*/
create table AREAS
(
   ARE_ID               integer not null,
   ARE_NOMBRE           varchar(100) not null,
   ARE_ACTV             boolean not null,
   primary key (ARE_ID)
);

alter table AREAS comment 'R7';

/*==============================================================*/
/* Table: ASIGNADO                                              */
/*==============================================================*/
create table ASIGNADO
(
   ASI_ID               integer not null,
   REQ_ID               integer not null,
   RUC_ID               integer,
   USU_ID               integer,
   ASI_ACT              boolean not null,
   primary key (ASI_ID)
);

alter table ASIGNADO comment 'R_9 y R_10';

/*==============================================================*/
/* Table: BASECONOCIMIENTO                                      */
/*==============================================================*/
create table BASECONOCIMIENTO
(
   BAC_ID               integer not null,
   SEG_ID               integer not null,
   SEG_TITULO           varchar(100) not null,
   BAC_ACT              boolean not null,
   primary key (BAC_ID)
);

alter table BASECONOCIMIENTO comment 'R18';

/*==============================================================*/
/* Table: CALIFICACION                                          */
/*==============================================================*/
create table CALIFICACION
(
   CALI_ID              integer not null,
   CALI_NOMBRE          varchar(100) not null,
   primary key (CALI_ID)
);

alter table CALIFICACION comment 'R25';

/*==============================================================*/
/* Table: CAMPOSRUTINAS                                         */
/*==============================================================*/
create table CAMPOSRUTINAS
(
   CRUT_ID              integer not null,
   RUT_ID               integer not null,
   CRUT_VALOR           varchar(100) not null,
   primary key (CRUT_ID)
);

alter table CAMPOSRUTINAS comment 'r13';

/*==============================================================*/
/* Table: CATCASOS                                              */
/*==============================================================*/
create table CATCASOS
(
   CATC_ID              integer not null,
   CATC_NOMBRE          varchar(100) not null,
   CATC_ACT             boolean not null,
   primary key (CATC_ID)
);

alter table CATCASOS comment 'R_2
se comunica con Subcategorias';

/*==============================================================*/
/* Table: CATEVSESTADOS                                         */
/*==============================================================*/
create table CATEVSESTADOS
(
   CVSE_ID              integer not null,
   CATC_ID              integer,
   EST_ID               integer,
   CVSE_ACT             boolean not null,
   primary key (CVSE_ID),
   key AK_KEY_2 (CATC_ID, EST_ID)
);

alter table CATEVSESTADOS comment 'Parte del R_7';

/*==============================================================*/
/* Table: DIVSUBCATEGORIAS                                      */
/*==============================================================*/
create table DIVSUBCATEGORIAS
(
   DIV_ID               integer not null,
   SUBC_ID              integer,
   DIV_NOMBRE           varchar(100) not null,
   DIV_PORCENTAJE       integer not null,
   DIV_TIEMPO           integer not null,
   DIV_ACT              boolean not null,
   primary key (DIV_ID)
);

alter table DIVSUBCATEGORIAS comment 'R_24';

/*==============================================================*/
/* Table: ESTADOS                                               */
/*==============================================================*/
create table ESTADOS
(
   EST_ID               integer not null,
   EST_NOMBRE           varchar(100) not null,
   EST_ACT              boolean not null,
   primary key (EST_ID)
);

alter table ESTADOS comment 'R_4';

/*==============================================================*/
/* Table: HISTORICOFECHAS                                       */
/*==============================================================*/
create table HISTORICOFECHAS
(
   HISF_ID              integer not null,
   HISF_REQE            integer not null,
   HISF_FECHA           datetime not null,
   HISF_ESTADO          varchar(100) not null,
   primary key (HISF_ID)
);

alter table HISTORICOFECHAS comment 'R9 y R10';

/*==============================================================*/
/* Table: LOGAUDITORIA                                          */
/*==============================================================*/
create table LOGAUDITORIA
(
   ID                   integer not null,
   TABLA                varchar(100) not null,
   ID_TABLA             integer not null,
   USUARIO              varchar(100) not null,
   FECHA                date not null,
   ACCION               varchar(1) not null,
   primary key (ID)
);

/*==============================================================*/
/* Table: ORIGENSOLICITUD                                       */
/*==============================================================*/
create table ORIGENSOLICITUD
(
   ORGS_ID              integer not null,
   ORGS_NOMBRE          varchar(100) not null,
   ORGS_ACT             boolean not null,
   primary key (ORGS_ID)
);

alter table ORIGENSOLICITUD comment 'R_5';

/*==============================================================*/
/* Table: RELAREACORD                                           */
/*==============================================================*/
create table RELAREACORD
(
   RAC_ID               integer not null,
   USU_ID               integer not null,
   ARE_ID               integer,
   primary key (RAC_ID),
   key AK_KEY_2 (USU_ID, ARE_ID)
);

alter table RELAREACORD comment 'relacion area coordinador';

/*==============================================================*/
/* Table: RELCATEST                                             */
/*==============================================================*/
create table RELCATEST
(
   RCE_ID               integer not null,
   CVSE_ID_ORIGEN       integer not null,
   CVSE_ID_DESTINO      integer not null,
   RCE_ACT              boolean not null,
   primary key (RCE_ID),
   key AK_KEY_2 (CVSE_ID_ORIGEN, CVSE_ID_DESTINO)
);

alter table RELCATEST comment 'Parte del R_7';

/*==============================================================*/
/* Table: RELROLUSUCATVSESTADO                                  */
/*==============================================================*/
create table RELROLUSUCATVSESTADO
(
   RRC_ID               integer not null,
   CVSE_ID              integer not null,
   ROLU_ID              integer not null,
   RRC_ACT              boolean not null,
   primary key (RRC_ID),
   key AK_KEY_2 (CVSE_ID, ROLU_ID)
);

alter table RELROLUSUCATVSESTADO comment 'parte de R_7
';

/*==============================================================*/
/* Table: RELRUTCAT                                             */
/*==============================================================*/
create table RELRUTCAT
(
   RRCA_ID              integer not null,
   RUT_ID               integer not null,
   CATC_ID              integer not null,
   RRCA_ACT             boolean not null,
   primary key (RRCA_ID),
   key AK_KEY_2 (RUT_ID, CATC_ID)
);

alter table RELRUTCAT comment 'r13 relacion rutina categoria';

/*==============================================================*/
/* Table: REQUERIMIENTO                                         */
/*==============================================================*/
create table REQUERIMIENTO
(
   REQ_ID               integer not null,
   TIPC_ID              integer,
   DIV_ID               integer,
   CVSE_ID              integer,
   ORGS_ID              integer,
   REQ_TITULO           varchar(100) not null,
   REQ_DESCRIPCION      text not null,
   REQ_ACT              boolean not null,
   REQ_USUARIOSOL       varchar(100) not null,
   REQ_FECHASOL         datetime not null,
   CALI_ID              integer,
   REQ_OBSERVACION      text,
   REQ_CAMBIO           integer,
   primary key (REQ_ID)
);

alter table REQUERIMIENTO comment 'Pertenece a R-9 y R_10';

/*==============================================================*/
/* Table: ROLESUSUARIOS                                         */
/*==============================================================*/
create table ROLESUSUARIOS
(
   ROLU_ID              integer not null,
   ROLU_NOMBRE          varchar(100) not null,
   ROLU_ACT             boolean not null,
   primary key (ROLU_ID)
);

alter table ROLESUSUARIOS comment 'R_7 parte';

/*==============================================================*/
/* Table: ROLUSUCAT                                             */
/*==============================================================*/
create table ROLUSUCAT
(
   RUC_ID               integer not null,
   ROLU_ID              integer,
   USU_ID               integer,
   CATC_ID              integer,
   RUC_ACT              boolean not null,
   primary key (RUC_ID),
   key AK_KEY_2 (USU_ID, CATC_ID)
);

alter table ROLUSUCAT comment 'parte R_7 union de ls tabals de roles usuarios y categorias ';

/*==============================================================*/
/* Table: RUTINAS                                               */
/*==============================================================*/
create table RUTINAS
(
   RUT_ID               integer not null,
   RUT_NOMBRE           varchar(100) not null,
   RUT_DESCRIPCION      text not null,
   RUT_ACT              boolean not null,
   primary key (RUT_ID)
);

alter table RUTINAS comment 'R13';

/*==============================================================*/
/* Table: SEGUIMIENTOS                                          */
/*==============================================================*/
create table SEGUIMIENTOS
(
   SEG_ID               integer not null,
   REQ_ID               integer not null,
   CVSE_ID              integer not null,
   SEG_OBSERVACION      text not null,
   SEG_FECHASEG         datetime not null,
   SEG_USUARIO          varchar(100) not null,
   SEG_SOLUCION         boolean not null,
   primary key (SEG_ID)
);

alter table SEGUIMIENTOS comment 'R9 ,R10,R11,R12,R14,R15';

/*==============================================================*/
/* Table: SUBCATEGORIA                                          */
/*==============================================================*/
create table SUBCATEGORIA
(
   SUBC_ID              integer not null,
   CATC_ID              integer not null,
   SUBC_NOMBRE          varchar(100) not null,
   SUBC_PORCENTAJE      integer not null,
   SUBC_ACT             boolean not null,
   primary key (SUBC_ID)
);

alter table SUBCATEGORIA comment 'R_3
Llave forenea amarra subcategoria con categoria ca';

/*==============================================================*/
/* Table: TIPIFICACIONCASOS                                     */
/*==============================================================*/
create table TIPIFICACIONCASOS
(
   TIPC_ID              integer not null,
   TIPC_NOMBRE          varchar(100) not null,
   TIPC_ACT             boolean not null,
   primary key (TIPC_ID)
);

alter table TIPIFICACIONCASOS comment 'R_1';

/*==============================================================*/
/* Table: USUARIOS                                              */
/*==============================================================*/
create table USUARIOS
(
   USU_ID               integer not null,
   USU_NOMBRE           varchar(100) not null,
   USU_CODIGO           varchar(100) not null,
   USU_CLAVE            varchar(100) not null,
   USU_ACT              boolean not null,
   USU_USU_ID           integer,
   primary key (USU_ID),
   key AK_USUARIOS (USU_CODIGO)
);

alter table USUARIOS comment 'R_7';

alter table ADJUNTO add constraint FK_REFERENCE_20 foreign key (SEG_ID)
      references SEGUIMIENTOS (SEG_ID) on delete restrict on update restrict;

alter table ASIGNADO add constraint FK_REFERENCE_15 foreign key (REQ_ID)
      references REQUERIMIENTO (REQ_ID) on delete restrict on update restrict;

alter table ASIGNADO add constraint FK_REFERENCE_16 foreign key (RUC_ID)
      references ROLUSUCAT (RUC_ID) on delete restrict on update restrict;

alter table ASIGNADO add constraint FK_REFERENCE_17 foreign key (USU_ID)
      references USUARIOS (USU_ID) on delete restrict on update restrict;

alter table BASECONOCIMIENTO add constraint FK_REFERENCE_23 foreign key (SEG_ID)
      references SEGUIMIENTOS (SEG_ID) on delete restrict on update restrict;

alter table CAMPOSRUTINAS add constraint FK_REFERENCE_25 foreign key (RUT_ID)
      references RUTINAS (RUT_ID) on delete restrict on update restrict;

alter table CATEVSESTADOS add constraint FK_REFERENCE_6 foreign key (CATC_ID)
      references CATCASOS (CATC_ID) on delete restrict on update restrict;

alter table CATEVSESTADOS add constraint FK_REFERENCE_7 foreign key (EST_ID)
      references ESTADOS (EST_ID) on delete restrict on update restrict;

alter table DIVSUBCATEGORIAS add constraint FK_REFERENCE_2 foreign key (SUBC_ID)
      references SUBCATEGORIA (SUBC_ID) on delete restrict on update restrict;

alter table RELAREACORD add constraint FK_REFERENCE_28 foreign key (USU_ID)
      references USUARIOS (USU_ID) on delete restrict on update restrict;

alter table RELAREACORD add constraint FK_REFERENCE_29 foreign key (ARE_ID)
      references AREAS (ARE_ID) on delete restrict on update restrict;

alter table RELCATEST add constraint FK_REFERENCE_8 foreign key (CVSE_ID_ORIGEN)
      references CATEVSESTADOS (CVSE_ID) on delete restrict on update restrict;

alter table RELCATEST add constraint FK_REFERENCE_9 foreign key (CVSE_ID_DESTINO)
      references CATEVSESTADOS (CVSE_ID) on delete restrict on update restrict;

alter table RELROLUSUCATVSESTADO add constraint FK_REFERENCE_10 foreign key (CVSE_ID)
      references CATEVSESTADOS (CVSE_ID) on delete restrict on update restrict;

alter table RELROLUSUCATVSESTADO add constraint FK_REFERENCE_11 foreign key (ROLU_ID)
      references ROLESUSUARIOS (ROLU_ID) on delete restrict on update restrict;

alter table RELRUTCAT add constraint FK_REFERENCE_26 foreign key (RUT_ID)
      references RUTINAS (RUT_ID) on delete restrict on update restrict;

alter table RELRUTCAT add constraint FK_REFERENCE_27 foreign key (CATC_ID)
      references CATCASOS (CATC_ID) on delete restrict on update restrict;

alter table REQUERIMIENTO add constraint FK_REFERENCE_12 foreign key (TIPC_ID)
      references TIPIFICACIONCASOS (TIPC_ID) on delete restrict on update restrict;

alter table REQUERIMIENTO add constraint FK_REFERENCE_13 foreign key (DIV_ID)
      references DIVSUBCATEGORIAS (DIV_ID) on delete restrict on update restrict;

alter table REQUERIMIENTO add constraint FK_REFERENCE_18 foreign key (CVSE_ID)
      references CATEVSESTADOS (CVSE_ID) on delete restrict on update restrict;

alter table REQUERIMIENTO add constraint FK_REFERENCE_22 foreign key (ORGS_ID)
      references ORIGENSOLICITUD (ORGS_ID) on delete restrict on update restrict;

alter table REQUERIMIENTO add constraint FK_REFERENCE_24 foreign key (CALI_ID)
      references CALIFICACION (CALI_ID) on delete restrict on update restrict;

alter table ROLUSUCAT add constraint FK_REFERENCE_3 foreign key (ROLU_ID)
      references ROLESUSUARIOS (ROLU_ID) on delete restrict on update restrict;

alter table ROLUSUCAT add constraint FK_REFERENCE_4 foreign key (USU_ID)
      references USUARIOS (USU_ID) on delete restrict on update restrict;

alter table ROLUSUCAT add constraint FK_REFERENCE_5 foreign key (CATC_ID)
      references CATCASOS (CATC_ID) on delete restrict on update restrict;

alter table SEGUIMIENTOS add constraint FK_REFERENCE_19 foreign key (REQ_ID)
      references REQUERIMIENTO (REQ_ID) on delete restrict on update restrict;

alter table SEGUIMIENTOS add constraint FK_REFERENCE_21 foreign key (CVSE_ID)
      references CATEVSESTADOS (CVSE_ID) on delete restrict on update restrict;

alter table SUBCATEGORIA add constraint FK_REFERENCE_1 foreign key (CATC_ID)
      references CATCASOS (CATC_ID) on delete restrict on update restrict;

alter table USUARIOS add constraint FK_REFERENCE_30 foreign key (USU_USU_ID)
      references USUARIOS (USU_ID) on delete restrict on update restrict;

