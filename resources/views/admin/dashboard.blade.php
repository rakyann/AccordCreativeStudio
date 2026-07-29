@extends('layouts.app')

@section('content')
<div style="background-color: #000B5B; min-height: 100vh; color: #FFFFFF; padding: 120px 0 60px 0;">
    <div class="container">
        
        <div style="display: flex; justify-content: space-between; align-items: center; border-bottom: 1px solid rgba(255,255,255,0.15); padding-bottom: 24px; margin-bottom: 40px;">
            <div>
                <a href="/" style="color: rgba(255,255,255,0.7); text-decoration: none; font-size: 0.9rem; letter-spacing: 1px;">← Back to Website</a>
                <h1 style="font-family: 'Cormorant Garamond', serif; font-size: 2.8rem; font-weight: 500; margin-top: 10px;">ACCORD Studio Admin Dashboard</h1>
                <p style="color: #B5C4FF; margin: 0;">Upload and manage portfolio works & client testimonials in MySQL database (<code>accordstudio</code>).</p>
            </div>
            <a href="/" class="nav-cta" style="padding: 10px 20px; font-size: 0.85rem;">View Live Site ↗</a>
        </div>

        @if(session('success'))
            <div style="background: rgba(1, 29, 199, 0.4); border: 1px solid #BACBFF; color: #FFFFFF; padding: 16px 20px; border-radius: 8px; margin-bottom: 30px;">
                ✓ {{ session('success') }}
            </div>
        @endif

        <div style="display: grid; grid-template-columns: repeat(auto-fit, minmax(400px, 1fr)); gap: 40px;">
            
            <!-- Upload Portfolio Form -->
            <div style="background: rgba(255,255,255,0.05); border: 1px solid rgba(255,255,255,0.15); border-radius: 12px; padding: 30px;">
                <h2 style="font-family: 'Cormorant Garamond', serif; font-size: 1.8rem; margin-bottom: 20px; border-bottom: 1px solid rgba(255,255,255,0.1); padding-bottom: 10px;">+ Upload New Portfolio Project</h2>
                
                <form action="{{ route('admin.projects.store') }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    <div style="margin-bottom: 18px;">
                        <label style="display: block; font-size: 0.85rem; letter-spacing: 1px; text-transform: uppercase; color: #B5C4FF; margin-bottom: 6px;">Project Title *</label>
                        <input type="text" name="title" required placeholder="e.g. Aether Digital Experience" style="width: 100%; padding: 12px; background: rgba(0,0,0,0.3); border: 1px solid rgba(255,255,255,0.2); border-radius: 6px; color: #FFF;">
                    </div>

                    <div style="display: grid; grid-template-columns: 1fr 1fr; gap: 15px; margin-bottom: 18px;">
                        <div>
                            <label style="display: block; font-size: 0.85rem; letter-spacing: 1px; text-transform: uppercase; color: #B5C4FF; margin-bottom: 6px;">Category *</label>
                            <input type="text" name="category" required placeholder="e.g. Web Application / UI Design" style="width: 100%; padding: 12px; background: rgba(0,0,0,0.3); border: 1px solid rgba(255,255,255,0.2); border-radius: 6px; color: #FFF;">
                        </div>
                        <div>
                            <label style="display: block; font-size: 0.85rem; letter-spacing: 1px; text-transform: uppercase; color: #B5C4FF; margin-bottom: 6px;">Year</label>
                            <input type="text" name="year" placeholder="e.g. 2026" style="width: 100%; padding: 12px; background: rgba(0,0,0,0.3); border: 1px solid rgba(255,255,255,0.2); border-radius: 6px; color: #FFF;">
                        </div>
                    </div>

                    <div style="margin-bottom: 18px;">
                        <label style="display: block; font-size: 0.85rem; letter-spacing: 1px; text-transform: uppercase; color: #B5C4FF; margin-bottom: 6px;">Client Name</label>
                        <input type="text" name="client" placeholder="e.g. Aether Global Ltd" style="width: 100%; padding: 12px; background: rgba(0,0,0,0.3); border: 1px solid rgba(255,255,255,0.2); border-radius: 6px; color: #FFF;">
                    </div>

                    <div style="margin-bottom: 18px;">
                        <label style="display: block; font-size: 0.85rem; letter-spacing: 1px; text-transform: uppercase; color: #B5C4FF; margin-bottom: 6px;">Description</label>
                        <textarea name="description" rows="3" placeholder="Brief project summary..." style="width: 100%; padding: 12px; background: rgba(0,0,0,0.3); border: 1px solid rgba(255,255,255,0.2); border-radius: 6px; color: #FFF;"></textarea>
                    </div>

                    <div style="margin-bottom: 22px;">
                        <label style="display: block; font-size: 0.85rem; letter-spacing: 1px; text-transform: uppercase; color: #B5C4FF; margin-bottom: 6px;">Project Cover Image *</label>
                        <input type="file" name="image" required accept="image/*" style="width: 100%; padding: 10px; background: rgba(0,0,0,0.3); border: 1px solid rgba(255,255,255,0.2); border-radius: 6px; color: #FFF;">
                    </div>

                    <button type="submit" style="width: 100%; padding: 14px; background: #011DC7; border: 1px solid #BACBFF; border-radius: 6px; color: #FFF; font-weight: 600; font-size: 0.95rem; cursor: pointer; letter-spacing: 1px;">Upload Project to MySQL DB</button>
                </form>
            </div>

            <!-- Upload Testimonial Form -->
            <div style="background: rgba(255,255,255,0.05); border: 1px solid rgba(255,255,255,0.15); border-radius: 12px; padding: 30px;">
                <h2 style="font-family: 'Cormorant Garamond', serif; font-size: 1.8rem; margin-bottom: 20px; border-bottom: 1px solid rgba(255,255,255,0.1); padding-bottom: 10px;">+ Add Client Testimonial</h2>
                
                <form action="{{ route('admin.testimonials.store') }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    <div style="margin-bottom: 18px;">
                        <label style="display: block; font-size: 0.85rem; letter-spacing: 1px; text-transform: uppercase; color: #B5C4FF; margin-bottom: 6px;">Client Name *</label>
                        <input type="text" name="client_name" required placeholder="e.g. Alexander Wright" style="width: 100%; padding: 12px; background: rgba(0,0,0,0.3); border: 1px solid rgba(255,255,255,0.2); border-radius: 6px; color: #FFF;">
                    </div>

                    <div style="display: grid; grid-template-columns: 1fr 1fr; gap: 15px; margin-bottom: 18px;">
                        <div>
                            <label style="display: block; font-size: 0.85rem; letter-spacing: 1px; text-transform: uppercase; color: #B5C4FF; margin-bottom: 6px;">Company</label>
                            <input type="text" name="client_company" placeholder="e.g. Aether Global" style="width: 100%; padding: 12px; background: rgba(0,0,0,0.3); border: 1px solid rgba(255,255,255,0.2); border-radius: 6px; color: #FFF;">
                        </div>
                        <div>
                            <label style="display: block; font-size: 0.85rem; letter-spacing: 1px; text-transform: uppercase; color: #B5C4FF; margin-bottom: 6px;">Role / Title</label>
                            <input type="text" name="client_role" placeholder="e.g. Founder & CEO" style="width: 100%; padding: 12px; background: rgba(0,0,0,0.3); border: 1px solid rgba(255,255,255,0.2); border-radius: 6px; color: #FFF;">
                        </div>
                    </div>

                    <div style="margin-bottom: 18px;">
                        <label style="display: block; font-size: 0.85rem; letter-spacing: 1px; text-transform: uppercase; color: #B5C4FF; margin-bottom: 6px;">Testimonial Quote *</label>
                        <textarea name="content" required rows="3" placeholder="Enter quote..." style="width: 100%; padding: 12px; background: rgba(0,0,0,0.3); border: 1px solid rgba(255,255,255,0.2); border-radius: 6px; color: #FFF;"></textarea>
                    </div>

                    <div style="margin-bottom: 22px;">
                        <label style="display: block; font-size: 0.85rem; letter-spacing: 1px; text-transform: uppercase; color: #B5C4FF; margin-bottom: 6px;">Rating (1 to 5)</label>
                        <select name="rating" style="width: 100%; padding: 12px; background: rgba(0,0,0,0.3); border: 1px solid rgba(255,255,255,0.2); border-radius: 6px; color: #FFF;">
                            <option value="5">★★★★★ (5 Stars)</option>
                            <option value="4">★★★★☆ (4 Stars)</option>
                            <option value="3">★★★☆☆ (3 Stars)</option>
                        </select>
                    </div>

                    <button type="submit" style="width: 100%; padding: 14px; background: #011DC7; border: 1px solid #BACBFF; border-radius: 6px; color: #FFF; font-weight: 600; font-size: 0.95rem; cursor: pointer; letter-spacing: 1px;">Save Testimonial to MySQL DB</button>
                </form>
            </div>

        </div>

        <!-- Current Projects Table -->
        <div style="margin-top: 50px; background: rgba(255,255,255,0.05); border: 1px solid rgba(255,255,255,0.15); border-radius: 12px; padding: 30px;">
            <h2 style="font-family: 'Cormorant Garamond', serif; font-size: 1.8rem; margin-bottom: 20px;">Active Portfolio Items in MySQL ({{ count($projects) }})</h2>
            
            <div style="overflow-x: auto;">
                <table style="width: 100%; border-collapse: collapse; text-align: left;">
                    <thead>
                        <tr style="border-bottom: 1px solid rgba(255,255,255,0.2); color: #B5C4FF; font-size: 0.85rem; text-transform: uppercase;">
                            <th style="padding: 12px;">Image</th>
                            <th style="padding: 12px;">Title</th>
                            <th style="padding: 12px;">Category</th>
                            <th style="padding: 12px;">Client / Year</th>
                            <th style="padding: 12px;">Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        @forelse($projects as $p)
                            <tr style="border-bottom: 1px solid rgba(255,255,255,0.08);">
                                <td style="padding: 12px;">
                                    <img src="{{ $p->image_url }}" alt="" style="width: 60px; height: 40px; object-fit: cover; border-radius: 4px;">
                                </td>
                                <td style="padding: 12px; font-weight: 600;">{{ $p->title }}</td>
                                <td style="padding: 12px; color: #B5C4FF;">{{ $p->category }}</td>
                                <td style="padding: 12px; font-size: 0.85rem;">{{ $p->client ?? '-' }} ({{ $p->year ?? '-' }})</td>
                                <td style="padding: 12px;">
                                    <form action="{{ route('admin.projects.delete', $p->id) }}" method="POST" onsubmit="return confirm('Delete this project?');">
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit" style="background: rgba(255,0,0,0.2); border: 1px solid rgba(255,0,0,0.5); color: #FF8888; padding: 6px 12px; border-radius: 4px; cursor: pointer; font-size: 0.8rem;">Delete</button>
                                    </form>
                                </td>
                            </tr>
                        @empty
                            <tr><td colspan="5" style="padding: 20px; text-align: center; color: #AAA;">No portfolio items yet.</td></tr>
                        @endforelse
                    </tbody>
                </table>
            </div>
        </div>

    </div>
</div>
@endsection
