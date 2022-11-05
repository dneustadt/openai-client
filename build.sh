#!/bin/sh

openapi-generator-cli generate -i openai.yaml -g php --skip-validate-spec --additional-properties invokerPackage='OpenAI\\Client'