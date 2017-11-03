
create table t3 (
    
	dist int(11) not null auto_incremented,
    
	repno int(11) not null,
    
	repname varchar(16) not null,
    
	primary key (dist)

);



create table t4 (
    
	cust int(11) not null auto_incremented,
    
	custname varchar(16) not null,
    
	district int(11) not null,
    
	revenue float not null,
    
	primary key (cust),
    
	index (disctrict)

);



create procedure p3 ()
    
begin
        
	declare v int;
        
	set v = 0;
        
	while v < 5 do
            
		insert into t3 (repno, repname) 
		values (rand(),'text');
            
		set v = v + 1;
        
	end while;
    
end;



create procedure p4 ()
    
begin
        
	while t4 (district) < 5 do
            
		insert into t4 (cust) values (10000);
        
	end while;
    
end;