<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class PortfolioSeeder extends Seeder
{
    public function run(): void
    {
        // Create User
        DB::table('users')->insert([
            'name' => 'Adesh Sapra',
            'email' => 'adeshsapra07@gmail.com',
            'age' => 22,
            'role' => 'admin',
            'password' => Hash::make('admin123'),
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        // About
        DB::table('abouts')->insert([
            'title' => 'Full Stack Developer',
            'bio' => 'BCA graduate with hands-on project experience in full-stack development using Laravel (PHP), MySQL, JavaScript, HTML5, and CSS3. Passionate about building efficient, user-friendly applications. Strong problem solving skills and keen attention to clean UI/UX.',
            'location' => 'Amreli, Gujarat, India',
            'email' => 'adeshsapra07@gmail.com',
            'phone' => '+91 97245 64357',
            'cv_file' => 'cv/adesh_sapra.pdf',
            'profile_image' => 'images/adesh.png',
            'is_open_to_work' => true,
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        // Skills
        $skills = [
            ['name' => 'HTML5', 'type' => 'technical', 'category' => 'Front-End'],
            ['name' => 'CSS3', 'type' => 'technical', 'category' => 'Front-End'],
            ['name' => 'JavaScript', 'type' => 'technical', 'category' => 'Front-End'],
            ['name' => 'PHP', 'type' => 'technical', 'category' => 'Back-End'],
            ['name' => 'Laravel', 'type' => 'technical', 'category' => 'Back-End'],
            ['name' => 'MySQL', 'type' => 'technical', 'category' => 'Database'],
            ['name' => 'Git/GitHub', 'type' => 'technical', 'category' => 'Tools'],
            ['name' => 'VS Code', 'type' => 'technical', 'category' => 'Tools'],
            ['name' => 'Teamwork', 'type' => 'soft', 'category' => null],
            ['name' => 'Fast Learning', 'type' => 'soft', 'category' => null],
            ['name' => 'Time Management', 'type' => 'soft', 'category' => null],
            ['name' => 'Attention to Detail', 'type' => 'soft', 'category' => null],
            ['name' => 'Problem Solving', 'type' => 'soft', 'category' => null],
        ];
        DB::table('skills')->insert(array_map(function ($skill) {
            return array_merge($skill, [
                'created_at' => now(),
                'updated_at' => now(),
            ]);
        }, $skills));

        // Projects
        $projects = [
            [
                'title' => 'JOBHIRENCE',
                'slug' => 'jobhirence',
                'description' => 'Job portal system for employers and candidates. Features social logins (Google, GitHub), secure messaging, resume uploads, and more.',
                'image' => 'projects/jobhirence.png',
                'url' => 'https://example.com/jobhirence',
                'github_url' => 'https://github.com/username/jobhirence',
                'tech_stack' => 'Laravel, PHP, MySQL',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'title' => 'CLASSYCUT',
                'slug' => 'classycut',
                'description' => 'Men’s salon booking & management system. Features membership plans, appointments, notifications, and comprehensive reports.',
                'image' => 'projects/classycut.png',
                'url' => 'https://example.com/classycut',
                'github_url' => 'https://github.com/username/classycut',
                'tech_stack' => 'PHP, MySQL',
                'created_at' => now(),
                'updated_at' => now(),
            ],
        ];
        DB::table('projects')->insert($projects);

        // Education
        DB::table('education')->insert([
            [
                'degree' => 'Bachelor of Computer Applications (BCA)',
                'institution' => 'Kamesh Science College (Gujarat University)',
                'year_range' => '2022 – 2025',
                'percentage' => 'CGPA: 8.0',
                'details' => null,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'degree' => 'Higher Secondary Certificate (HSC)',
                'institution' => '—',
                'year_range' => '2020 – 2022',
                'percentage' => '72.43%',
                'details' => null,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'degree' => 'Course on Computer Concepts (CCC)',
                'institution' => 'INFOTECH COMPUTER',
                'year_range' => 'April 2022',
                'percentage' => 'Grade A+',
                'details' => null,
                'created_at' => now(),
                'updated_at' => now(),
            ],
        ]);

        // Messages (optional dummy)
        DB::table('messages')->insert([
            [
                'name' => 'John Doe',
                'email' => 'john@example.com',
                'subject' => 'Collaboration',
                'message' => 'I saw your projects and would love to collaborate.',
                'created_at' => now(),
                'updated_at' => now(),
            ]
        ]);

        // Attach skills to projects randomly
        $projectIds = DB::table('projects')->pluck('id');
        $skillIds = DB::table('skills')->pluck('id')->toArray();

        foreach ($projectIds as $projectId) {
            $randomSkillIds = array_rand(array_flip($skillIds), 3);
            foreach ((array)$randomSkillIds as $skillId) {
                DB::table('project_skill')->insert([
                    'project_id' => $projectId,
                    'skill_id' => $skillId,
                ]);
            }
        }
    }
}
