%{
	#include<stdio.h>
	#include<stdlib.h>
	#include "pro.tab.h"
	extern int yylval;
%}

alpha [A-Za-z_]
digit [0-9]

%%

"int" return INT;
"float" return FLOAT;
"char" return CHAR;
"double"return DOUBLE;
"void" return VOID;

"while" return WHILE;
"for" return FOR;
"if" return IF;
"else" return ELSE;
"cout" return COUT;
"endl" return ENDL;
"break" return BREAK;
"continue" return CONTINUE;

"do" return DO;
"bound" return BOUND;
"in" return IN;
"..." return T_dot;

"#include" return INCLUDE;
"main()" return MAINTOK;
"return" return RETURN;

{digit}+	{ yylval = atoi(yytext); return NUM; }
{alpha}({alpha}|{digit})* { return ID; }
{alpha}{alpha}*".h"? return H;
\".+\" return STRING;

"<" return T_lt;
">" return T_gt;
"=" return T_eq;
"<=" return T_lteq;
">=" return T_gteq;
"==" return T_eqeq;
"!=" return T_neq;

"+" return T_pl;
"-" return T_min;
"*" return T_mul;
"/" return T_div;
"++" return T_incr;
"--" return T_decr;

"||" return T_or;
"&&" return T_and;
"!"  return T_not;
"." return DOT;
[ \t\n]* ;

. return yytext[0];

%%