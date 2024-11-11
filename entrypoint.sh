#!/usr/bin/env sh

DIGITS=10

if [ -n "$1" ]; then
    DIGITS=$1
fi

echo "scale=$DIGITS;4*a(1)" > /pi_expression
time bc -l /pi_expressionn