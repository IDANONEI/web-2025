PROGRAM WorkWithQueryString(INPUT, OUTPUT);
USES
  DOS;

FUNCTION GetQueryStringParameter(Key: STRING): STRING;
VAR
  QueryString, Name: STRING;
  PosParameter, LenParameter: INTEGER;  
BEGIN
  Key := Key;
  QueryString := GetEnv('QUERY_STRING');
  QueryString := QueryString + '&';
  PosParameter := Pos(Key, QueryString);
  LenParameter := Length(QueryString);
  QueryString := Copy(QueryString, PosParameter + Length(Key), LenParameter);
  QueryString := Copy(QueryString, 2, Pos('&', QueryString) - 2);
  GetQueryStringParameter := QueryString;
END;  
  
BEGIN {WorkWithQueryString}
  WRITELN('Content-Type: text/plain');
  WRITELN;  
  WRITELN('First Name: ', GetQueryStringParameter('first_name'));
  WRITELN('Last Name: ', GetQueryStringParameter('last_name'));
  WRITELN('Age: ', GetQueryStringParameter('age'))
END. {WorkWithQueryString}

