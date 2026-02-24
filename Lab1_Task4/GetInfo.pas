PROGRAM GetInfo(INPUT, OUTPUT);
USES
  DOS;
VAR
  Request, Query, Content, User, Host: Char;
BEGIN
  WRITELN('Content-type: text/plain');
  WRITELN;
  Request := GetEnv('REQUEST_METHOD');
  Query := GetEnv('QUERY_STRING');
  Content := GetEnv('CONTENT_LENGHT');
  User := GetEnv('HTTP_USER_AGENT');
  Host := GetEnv('HTTP_HOST');
  WRITELN(Request);
  WRITELN(Query);
  WRITELN(Content);
  WRITELN(User);
  WRITELN(Host)
END.