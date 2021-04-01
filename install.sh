#! /usr/bin/env bash
rsync -arvzP temp/* .
rsync -arvzP temp/.[^.]* .
rm -rf temp/