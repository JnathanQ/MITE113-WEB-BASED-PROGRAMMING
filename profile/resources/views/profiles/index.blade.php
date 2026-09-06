<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Jonathan Quero — Profile</title>
<link href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/5.3.2/css/bootstrap.min.css" rel="stylesheet">
<link href="https://fonts.googleapis.com/css2?family=Space+Grotesk:wght@500;700&family=JetBrains+Mono:wght@400;500&family=Inter:wght@400;500&display=swap" rel="stylesheet">
<style>
  :root{
    --ink: #10151b;
    --paper: #eef1f4;
    --card: #ffffff;
    --accent: #2f6fed;
    --accent-soft: #e7edfc;
    --line: #d7dce2;
    --muted: #5b6572;
  }

  body{
    background: var(--paper);
    background-image:
      linear-gradient(var(--line) 1px, transparent 1px),
      linear-gradient(90deg, var(--line) 1px, transparent 1px);
    background-size: 28px 28px;
    background-position: -1px -1px;
    font-family: 'Inter', sans-serif;
    color: var(--ink);
    min-height: 100vh;
    display: flex;
    align-items: center;
    padding: 3rem 1rem;
  }

  .card-wrap{
    max-width: 640px;
    margin: 0 auto;
  }

  .id-card{
    background: var(--card);
    border: 1px solid var(--line);
    border-radius: 4px;
    position: relative;
    overflow: hidden;
  }

  .id-card::before{
    content: "";
    position: absolute;
    top: 0; left: 0;
    width: 100%;
    height: 6px;
    background: var(--accent);
  }

  .id-header{
    padding: 2.25rem 2.25rem 1.5rem;
    border-bottom: 1px solid var(--line);
    display: flex;
    align-items: center;
    gap: 1.5rem;
  }

  .avatar{
    width: 76px;
    height: 76px;
    flex-shrink: 0;
    border-radius: 4px;
    background: var(--ink);
    color: #fff;
    display: flex;
    align-items: center;
    justify-content: center;
    font-family: 'Space Grotesk', sans-serif;
    font-weight: 700;
    font-size: 1.6rem;
    letter-spacing: 0.02em;
  }

  .id-name{
    font-family: 'Space Grotesk', sans-serif;
    font-weight: 700;
    font-size: 1.85rem;
    line-height: 1.15;
    margin: 0;
  }

  .id-role{
    color: var(--muted);
    font-size: 0.95rem;
    margin-top: 0.25rem;
  }

  .id-body{
    padding: 1.75rem 2.25rem 2.25rem;
  }

  .meta-row{
    display: flex;
    gap: 2.5rem;
    margin-bottom: 1.75rem;
  }

  .meta-item .meta-label{
    font-size: 0.75rem;
    color: var(--muted);
    margin-bottom: 0.2rem;
  }

  .meta-item .meta-value{
    font-family: 'JetBrains Mono', monospace;
    font-size: 0.95rem;
  }

  .section-label{
    font-size: 0.75rem;
    color: var(--muted);
    margin-bottom: 0.6rem;
  }

  .skill-list{
    display: flex;
    flex-wrap: wrap;
    gap: 0.5rem;
    margin-bottom: 1.75rem;
    padding: 0;
    list-style: none;
  }

  .skill-list li{
    font-family: 'JetBrains Mono', monospace;
    font-size: 0.85rem;
    background: var(--accent-soft);
    color: var(--accent);
    border: 1px solid #cfdcfa;
    border-radius: 3px;
    padding: 0.3rem 0.7rem;
  }

  .goal-box{
    border-left: 3px solid var(--accent);
    padding: 0.9rem 1.1rem;
    background: #fafbfc;
    font-size: 0.98rem;
    color: #2a323b;
  }

  @media (max-width: 480px){
    .id-header{ padding: 1.75rem 1.5rem 1.25rem; }
    .id-body{ padding: 1.5rem 1.5rem 1.75rem; }
    .id-name{ font-size: 1.5rem; }
    .meta-row{ gap: 1.5rem; flex-wrap: wrap; }
  }
</style>
</head>
<body>

  <div class="card-wrap">
    <div class="id-card">
      <div class="id-header">
        <div class="avatar">JQ</div>
        <div>
          <p class="id-name">{{ $profile['name'] }}</p>
          <div class="id-role">{{ $profile['program'] }} student</div>
        </div>
      </div>

      <div class="id-body">
        <div class="meta-row">
          <div class="meta-item">
            <div class="meta-label">Program</div>
            <div class="meta-value">{{ $profile['program'] }}</div>
          </div>
          <div class="meta-item">
            <div class="meta-label">Year level</div>
            <div class="meta-value">{{ $profile['year'] }}</div>
          </div>
        </div>

        <div class="section-label">Skills</div>
        <ul class="skill-list">
            @forelse ($profile['skills'] as $skill)
             <li>{{ $skill }}</li>
            @empty No skills listed.
            @endforelse
        </ul>

        <div class="section-label">Career goal</div>
        <div class="goal-box">
          {{ $profile['career_goals'] }}
        </div>
<br>
              <button onclick="window.location.href='{{ route('students.index') }}'" class="btn btn-primary">Go to Student List Activity</button>
      </div>




    </div>
  </div>

</body>
</html>

