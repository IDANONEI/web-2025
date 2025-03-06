program Test;
VAR
  QueryString, Name: STRING;
  PosParameter, LenParameter: INTEGER;  
BEGIN
  READLN(QueryString);
  QueryString := QueryString + '&';
  writeln(QueryString)

END. {WorkWithQueryString}

