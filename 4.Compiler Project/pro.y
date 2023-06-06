%{
	#include <stdio.h> /* C declaration */
	#include <stdlib.h>
	#include <math.h>
	int yylex(void);
	int sym[26],store[26];
%}

%token ID NUM T_lt T_gt T_lteq T_gteq T_neq T_eqeq T_pl T_min T_mul T_div T_and T_or 
T_incr T_decr T_not T_eq WHILE INT CHAR FLOAT DOUBLE VOID H MAINTOK INCLUDE 
BREAK CONTINUE IF ELSE COUT STRING FOR ENDL DOT DO RETURN BOUND IN T_dot

%nonassoc IF 
%nonassoc ELSE
%left T_lt T_gt
%left T_pl T_min
%left T_mul T_div

%%

S
 	: START {printf("\n Successful Compilation.\n");exit(0);}
 	;

START
 	: INCLUDE T_lt H T_gt MAIN
 	| INCLUDE "\"" H "\"" MAIN
 	;
MAIN
 	: VOID MAINTOK BODY
 	| INT MAINTOK BODY
 	;
BODY
 	: '{' C '}'
 	;
C
 	: C statement ';'
 	| C LOOPS
 	| statement ';'
 	| LOOPS
 	;
LOOPS
 	: WHILE '(' COND ')' LOOPBODY
	{
		if($3=='true')
		{
			printf("\n Inside WHILE loop.\n");
		}
		else
		{
			printf("\n Exit from WHILE loop.\n");
		}
	}
 	| FOR '(' ASSIGN_EXPR ';' COND ';' statement ')' LOOPBODY
	{
		if($5)
		{
			printf("\n Inside FOR loop.\n");
		}
		else
		{
			printf("\n Exit from FOR loop.\n");
		}
	}
 	| IF '(' COND ')' LOOPBODY
	{
		if($3)
		{
			printf("\n Inside IF block.\n");
		}
		else
		{
			printf("\n IF has no output.\n");
		}
	}
 	| IF '(' COND ')' LOOPBODY ELSE LOOPBODY
	{
		$$ = $3 ;
		if($3)
		{
			printf("\n Inside IF block.\n");
		}
		else
		{
			printf("\n Inside ELSE block.\n");
		}
	}
 	| IF '(' COND ')' LOOPBODY ELSE IF '(' COND ')' LOOPBODY ELSE LOOPBODY
	{
		if($3=='true')
		{
			printf("\n Inside IF block.\n");
		}
		else if($9=='true')
		{
			printf("\n Inside ELSE IF block.\n");
		}
		else
		{
			printf("\n Inside ELSE block.\n");
		}
	}
 	| DO BODY WHILE '(' COND ')' LOOPBODY
	{
		printf("\n Inside DO-WHILE loop.\n");
		$$ = $5;
		if($5)
		{
			printf("\n Continue to DO-WHILE loop.\n");
		}
		else
		{
			printf(" \n Exit from DO-WHILE block.\n"); exit(0);
		}
	}
 	;
 	| BOUND LIT IN LIT T_dot LIT LOOPBODY
	{
		$$ = $5;
		if($5)
		{
			printf("\n Inside Bound() loop.\n");
		}else{
			printf("\n Exit from Bound() loop.\n");
		}
		for(int i=$4; i<=$6; i++)
		{
			printf(" Value: %d \n", i);
		}
	}
 	;
LOOPBODY
 	: '{' C '}'
 	| ';'
 	| statement ';'
 	;

statement
 	: ASSIGN_EXPR
 	| ARITH_EXPR
 	| TERNARY_EXPR
 	| PRINT
 	;

COND : LIT RELOP LIT /* (x >= y), (x<5), (10>5) */
 	| LIT /* (x) */
 	| LIT RELOP LIT bin_boolop LIT RELOP LIT /* ((w>x) && (y<z)) */
 	| un_boolop '(' LIT RELOP LIT ')' /* !(x<=y) */
 	| un_boolop LIT RELOP LIT /* (!x < y) */
	| LIT bin_boolop LIT /* (x && y) */
 	| un_boolop '(' LIT ')' /* (!(x)) */
 	| un_boolop LIT /* (!x) */
 	;

ASSIGN_EXPR
 	: TYPE ID1 {printf("\n Valid Declaration.\n");}
	| ID T_eq ARITH_EXPR {printf("\n Valid Initialization.\n");}
	| ID T_eq TERNARY_EXPR
	{
		printf("\n Valid Ternary Initialization.\n"); $$ = $3 ;
	}
	| ASSIGN_EXPR ',' ID T_eq ARITH_EXPR {printf("\n Valid Initialization.\n");}
	| ID T_eq STRING
	| ASSIGN_EXPR ',' ID T_eq STRING
	| RETURN LIT
	;

ID1 : ID
	| ID1 ',' ID
 	| ID T_eq ARITH_EXPR
	| ID T_eq TERNARY_EXPR
	| ID1 ',' ID T_eq ARITH_EXPR
	| ID T_eq STRING
	| ID1 ',' ID T_eq STRING
	;

ARITH_EXPR
 	: LIT {$$=$1; } /* x, 5 */
	| LIT DOT ARITH_EXPR {$$=$1; } /* 5.5 */
 	| LIT T_pl ARITH_EXPR /* x + y */
	{
		$$=$1 + $3; 
		printf("\n Add Value = %d \n", $$);
	}
 	| LIT T_min ARITH_EXPR /* x - y */
	{
		$$=$1 - $3; 
		printf("\n Sub Value = %d \n", $$);
	}
 	| LIT T_mul ARITH_EXPR /* x * y */
	{
		$$=$1 * $3; 
		printf("\n Mult Value = %d \n", $$);
	}
 	| LIT T_div ARITH_EXPR {
		if($3)
		{
			$$=$1/$3;
			printf("\n Div Result = %f \n", $$);
		}else{
			$$=0;
			printf("\n Division by zero is not possible\n");
		}
	}
 
 	| LIT bin_boolop ARITH_EXPR{$$=$1&&$2, $$=$1||$2; } /* x && y, r||y */
 	| LIT un_arop {$$=$1++, $$=$1-- ;} /* x++, y-- */
 	| un_arop ARITH_EXPR {$$=++$1, $$=--$1 ;} /* ++x, --y */
 	| un_boolop ARITH_EXPR {$$=!$1; } /* !x */
 	;

TERNARY_EXPR
 	: '(' COND ')' '?' statement ':' statement
	{
		$$ = $2 ;
		if($2)
		{
			printf("\n Ternary Value: %d\n", $5);
		}
		else
		{
			printf("\n Ternary Value: %d\n", $7);
		}
	}
	;

PRINT : COUT T_lt T_lt STRING
 	| COUT T_lt T_lt STRING T_lt T_lt ENDL
	| COUT T_lt T_lt LIT /* cout << x ; */
	{
		$$ = $4;
		if($4)
		{ 
			printf("\n Value: %d\n", $4); 
		}
	}
	| COUT T_lt T_lt LIT T_lt T_lt ENDL /* cout << x << endl; */
	{
		$$ = $4;
		if($4)
		{ 
			printf("\n Value: %d\n", $4); 
		}
	}
	| COUT T_lt T_lt LIT T_lt T_lt LIT /* cout << x << y; */
	| COUT T_lt T_lt LIT T_lt T_lt LIT T_lt T_lt ENDL /* cout << x << y << endl; */
	;

LIT : ID
 	| NUM
 	;

TYPE : INT
 	| CHAR
 	| FLOAT
 	| DOUBLE
 	;

RELOP : T_lt
 	| T_gt
 	| T_lteq
 	| T_gteq
 	| T_neq
 	| T_eqeq
 	;

bin_boolop
 	: T_and
 	| T_or
 	;

un_arop : T_incr
 	| T_decr
 	;

un_boolop
	: T_not
 	;
%%

int yywrap()
{
	return 1;
}

void yyerror (char const *s)
{
	fprintf (stderr, "%s\n", s);
}

int main()
{
	printf("\n Your Program:\n");
	freopen("textFile.txt","r",stdin);
 	yyparse();
	return 0;
}