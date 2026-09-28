@extends('layouts.app')

@section('title', 'Project Idea')

@section('content')
    <div class="container mx-auto px-4 py-12 max-w-6xl">
        <div class="text-center mb-12">
            <h1 class="text-4xl font-bold text-white mb-4">Final Project Idea</h1>
            <p class="text-xl text-gray-300">
                Agentic AI<br>
                Department of Informatics Engineering ITS
            </p>
        </div>
        
        <div class="bg-gray-800/50 p-6 rounded-lg border border-white/10 mb-6">
            <h2 class="text-xl font-semibold text-white mb-4">Project Overview</h2>
            <p class="text-gray-300 leading-relaxed">
                This project explores the implementation of Agentic AI systems for solving complex problems 
                in the field of informatics engineering. Coming soon with exciting developments!
            </p>
        </div>
        
        <div class="grid grid-cols-1 md:grid-cols-2 gap-6 mb-6">
            <div class="bg-gray-800/50 p-6 rounded-lg border border-white/10">
                <h3 class="text-xl font-semibold text-indigo-400 mb-4">Objective</h3>
                <p class="text-gray-300 text-sm leading-relaxed">
                    Develop an intelligent agent system that can autonomously make decisions and perform tasks 
                    in a web application environment.
                </p>
            </div>
        
            <div class="bg-gray-800/50 p-6 rounded-lg border border-white/10">
                <h3 class="text-xl font-semibold text-indigo-400 mb-4">Technologies</h3>
                <div class="flex flex-wrap gap-2">
                    <span class="px-3 py-1 bg-indigo-900/50 text-indigo-300 text-sm rounded-full">Laravel</span>
                    <span class="px-3 py-1 bg-indigo-900/50 text-indigo-300 text-sm rounded-full">Tailwind CSS</span>
                    <span class="px-3 py-1 bg-indigo-900/50 text-indigo-300 text-sm rounded-full">Python</span>
                    <span class="px-3 py-1 bg-indigo-900/50 text-indigo-300 text-sm rounded-full">AI/ML</span>
                </div>
            </div>
        </div>
        
        <div class="bg-gray-800/50 p-6 rounded-lg border border-white/10 mb-6">
            <h3 class="text-xl font-semibold text-indigo-400 mb-4">Expected Outcomes</h3>
            <ul class="space-y-2 text-gray-300">
                <li class="flex items-start gap-2">
                    <span class="text-indigo-400 mt-1">▸</span>
                    <span class="text-sm">Functional prototype of an agentic AI system</span>
                </li>
                <li class="flex items-start gap-2">
                    <span class="text-indigo-400 mt-1">▸</span>
                    <span class="text-sm">Integration with web application framework</span>
                </li>
                <li class="flex items-start gap-2">
                    <span class="text-indigo-400 mt-1">▸</span>
                    <span class="text-sm">Comprehensive documentation and user guide</span>
                </li>
                <li class="flex items-start gap-2">
                    <span class="text-indigo-400 mt-1">▸</span>
                    <span class="text-sm">Performance evaluation and analysis</span>
                </li>
            </ul>
        </div>
        
        <div class="bg-gray-800/50 p-6 rounded-lg border border-white/10 text-center">
            <div class="inline-block px-6 py-3 bg-indigo-900/30 border border-indigo-500/30 rounded-lg">
                <p class="text-sm text-indigo-300">
                    <strong>Status:</strong> In Development
                </p>
            </div>
        </div>
    </div>
@endsection
