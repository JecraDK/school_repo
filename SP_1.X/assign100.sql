
create table t2 (
    
	pk1 int not null auto_incremented,
    
	visited date not null,
    
	named varchar(32) not null,
    
	num float not null
    
	primary key (pk1)

);



create procedure p1 ()
    
begin
        
	set @named = Jesper;
        
	set @visited = now();
        
	set @num = rand();
        
	insert into t2 values (@named, @visited, @num);
    



create procedure p2 (p int)
    
	select *
 from t2
    
	where pk1 = p

call p2(1)

call p2(2)

call p2(3)
call p2(4)

call p2(5)