### SQLCertidão presente na Certidão Imobiliaria (PM_Pedro de Toledo)

select
 cast(:inscricao     as varchar(30)) as inscricao,
 cast(:ip_acessado   as varchar(30)) as ip_acessado,     
 WCD.*,
    TRIM(WCD.PREFIXO)          AS PREFIXO,                                                                                     
    UDF_TRIM(WCD.LOGRA)        as LOGRADOURO,
    UDF_TRIM(WCD.N_IMOVEL)     AS NUM_IMOVEL,
    UDF_TRIM(WCD.BAIRRO)       AS BAIRRO,
    UDF_TRIM(WCD.QUADRA)       AS QUADRA,
    UDF_TRIM(WCD.LOTE)         AS LOTE,
    UDF_TRIM(WCD.COMPLEM)      AS COMPLEM,        
 coalesce(PF1.CPF,PJ1.CNPJ)    as CPF_CNPJ_PROP_BANCO,
 coalesce(PF2.CPF,PJ2.CNPJ)    as CPF_CNPJ_COMPR_BANCO,     
    
(select	TRIM(PCE.CIDADE)   AS CIDADE
	from SIS_PESSOA S
	left join SIS_ENDERECO SEN on SEN.ID_PESSOA = S.ID_PESSOA and SEN.PRINCIPAL = 1
	left join PROC_CTEC_ENDERECOS(SEN.ID_ENDERECO + 90000000) PCE ON 1=1
    where S.ID_PESSOA = P1.ID_PESSOA) as cidade,
    
(select	PCE.ESTADO
	from SIS_PESSOA S
	 left join SIS_ENDERECO SEN on SEN.ID_PESSOA = S.ID_PESSOA and SEN.PRINCIPAL = 1
	 left join PROC_CTEC_ENDERECOS(SEN.ID_ENDERECO + 90000000) PCE ON 1=1
    where S.ID_PESSOA = P1.ID_PESSOA) as estado,
  
UDF_TRIM (case when wcd.tipocert = 0 then 'NÃO CONSTAM'
                 when wcd.tipocert = 1 then 'CONSTAM' 
                 when wcd.tipocert = 2 then 'CONSTAM' else '' end) as tipocertidao,
UDF_TRIM (case when wcd.tipocert = 0 then 'Negativa' 
                 when wcd.tipocert = 1 then 'Positiva' 
                 when wcd.tipocert = 2 then 'Positiva com Efeito Negativa' else '' end as tipocertidaonp,          
                 
(select case I.I012 when 'S' then 'ATIVA' else 'INATIVA' end
      	from CTEC_IMOVEIS I   
     	where I.referencial = :referencial) as situacao,     	
     	
(SELECT ci.I015 FROM CTEC_IMOVEIS ci WHERE ci.REFERENCIAL = :REFERENCIAL) AS A_Terreno,
(SELECT cm.I016 FROM CTEC_IMOVEIS cm WHERE cm.REFERENCIAL = :REFERENCIAL) AS A_Construida,
(SELECT co.I017 FROM CTEC_IMOVEIS co WHERE co.REFERENCIAL = :REFERENCIAL) AS Testada
     	
from WEB_CERTIDAO_DEB('IPTU',:inscricao, -1, CAST(CURRENT_TIMESTAMP AS DATE)) WCD
left join SIS_PESSOA P1 on P1.ID_PESSOA = WCD.COD_PROP
left join SIS_PESSOA_FISICA PF1 on PF1.ID_PESSOA_FISICA = P1.ID_PESSOA_FISICA
left join SIS_PESSOA_JURIDICA PJ1 on PJ1.ID_PESSOA_JURIDICA = P1.ID_PESSOA_JURIDICA
left join SIS_PESSOA P2 on P2.ID_PESSOA = WCD.COD_COMPR
left join SIS_PESSOA_FISICA PF2 on PF2.ID_PESSOA_FISICA = P2.ID_PESSOA_FISICA
left join SIS_PESSOA_JURIDICA PJ2 on PJ2.ID_PESSOA_JURIDICA = P2.ID_PESSOA_JURIDICA
