@extends('admin.layout.appadmin')
@section('content')
    {{-- <h1>Selamat datang di dashboard</h1> --}}
    <h1 class="mt-4">Dashboard</h1>
    <ol class="breadcrumb mb-4">
        <li class="breadcrumb-item active">Dashboard</li>
    </ol>
    <div class="row">
        <div class="col-xl-3 col-md-6">
            <div class="card bg-primary text-white mb-4">
                <div class="card-body">Primary Card</div>
                <div class="card-footer d-flex align-items-center justify-content-between">
                    <a class="small text-white stretched-link" href="#">View Details</a>
                    <div class="small text-white"><i class="fas fa-angle-right"></i></div>
                </div>
            </div>
        </div>
        <div class="col-xl-3 col-md-6">
            <div class="card bg-warning text-white mb-4">
                <div class="card-body">Warning Card</div>
                <div class="card-footer d-flex align-items-center justify-content-between">
                    <a class="small text-white stretched-link" href="#">View Details</a>
                    <div class="small text-white"><i class="fas fa-angle-right"></i></div>
                </div>
            </div>
        </div>
        <div class="col-xl-3 col-md-6">
            <div class="card bg-success text-white mb-4">
                <div class="card-body">Success Card</div>
                <div class="card-footer d-flex align-items-center justify-content-between">
                    <a class="small text-white stretched-link" href="#">View Details</a>
                    <div class="small text-white"><i class="fas fa-angle-right"></i></div>
                </div>
            </div>
        </div>
        <div class="col-xl-3 col-md-6">
            <div class="card bg-danger text-white mb-4">
                <div class="card-body">Danger Card</div>
                <div class="card-footer d-flex align-items-center justify-content-between">
                    <a class="small text-white stretched-link" href="#">View Details</a>
                    <div class="small text-white"><i class="fas fa-angle-right"></i></div>
                </div>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-xl-6">
            <div class="card mb-4">
                <div class="card-header">
                    <i class="fas fa-chart-area me-1"></i>
                    Area Chart Example
                </div>
                <div class="card-body"><canvas id="myAreaChart" width="100%" height="40"></canvas></div>
            </div>
        </div>
        <div class="col-xl-6">
            <div class="card mb-4">
                <div class="card-header">
                    <i class="fas fa-chart-bar me-1"></i>
                    Bar Chart Example
                </div>
                <div class="card-body"><canvas id="myBarChart" width="100%" height="40"></canvas></div>
            </div>
        </div>
    </div>
    <div class="card mb-4">
        <div class="card-header">
            <i class="fas fa-table me-1"></i>
            DataTable Example
        </div>
        <div class="card-body">
            <table id="datatablesSimple">
                <thead>
                    <tr>
                        <th>Name</th>
                        <th>Position</th>
                        <th>Office</th>
                        <th>Age</th>
                        <th>Start date</th>
                        <th>Salary</th>
                    </tr>
                </thead>
                <tfoot>
                    <tr>
                        <th>Name</th>
                        <th>Position</th>
                        <th>Office</th>
                        <th>Age</th>
                        <th>Start date</th>
                        <th>Salary</th>
                    </tr>
                </tfoot>
                <tbody>
                    <tr>
                        <td>Peter Smith</td>
                        <td>Network Administrator</td>
                        <td>USA</td>
                        <td>35</td>
                        <td>2011/04/25</td>
                        <td>$70,000</td>
                    </tr>
                    <tr>
                        <td>Maria Rodriguez</td>
                        <td>Software Engineer</td>
                        <td>Mexico</td>
                        <td>28</td>
                        <td>2011/07/25</td>
                        <td>$60,000</td>
                    </tr>
                    <tr>
                        <td>John Chen</td>
                        <td>Data Analyst</td>
                        <td>China</td>
                        <td>31</td>
                        <td>2009/01/12</td>
                        <td>$65,000</td>
                    </tr>
                    <tr>
                        <td>Anna Petrova</td>
                        <td>UX Designer</td>
                        <td>Russia</td>
                        <td>29</td>
                        <td>2012/03/29</td>
                        <td>$55,000</td>
                    </tr>
                    <tr>
                        <td>Ahmed Khan</td>
                        <td>System Administrator</td>
                        <td>Pakistan</td>
                        <td>33</td>
                        <td>2008/11/28</td>
                        <td>$45,000</td>
                    </tr>
                    <tr>
                        <td>Olivia Li</td>
                        <td>Project Manager</td>
                        <td>Canada</td>
                        <td>38</td>
                        <td>2012/12/02</td>
                        <td>$80,000</td>
                    </tr>
                    <tr>
                        <td>Marco Rossi</td>
                        <td>Database Administrator</td>
                        <td>Italy</td>
                        <td>27</td>
                        <td>2012/08/06</td>
                        <td>$50,000</td>
                    </tr>
                    <tr>
                        <td>Rhona Davidson</td>
                        <td>Web Developer</td>
                        <td>Tokyo</td>
                        <td>27</td>
                        <td>2010/10/14</td>
                        <td>$55,000</td>
                    </tr>
                    <tr>
                        <td>Colleen Hurst</td>
                        <td>Cybersecurity Analyst</td>
                        <td>San Francisco</td>
                        <td>32</td>
                        <td>2009/09/15</td>
                        <td>$70,000</td>
                    </tr>
                    <tr>
                        <td>Sonya Frost</td>
                        <td>IT Support Specialist</td>
                        <td>Edinburgh</td>
                        <td>23</td>
                        <td>2008/12/13</td>
                        <td>$40,000</td>
                    </tr>
                    <tr>
                        <td>Jena Gaines</td>
                        <td>Software Developer</td>
                        <td>London</td>
                        <td>30</td>
                        <td>2008/12/19</td>
                        <td>$50,000</td>
                    </tr>
                    <tr>
                        <td>Quinn Flynn</td>
                        <td>UX Researcher</td>
                        <td>Edinburgh</td>
                        <td>22</td>
                        <td>2013/03/03</td>
                        <td>$60,000</td>
                    </tr>
                    <tr>
                        <td>Charde Marshall</td>
                        <td>Regional Director</td>
                        <td>San Francisco</td>
                        <td>36</td>
                        <td>2008/10/16</td>
                        <td>$65,000</td>
                    </tr>
                    <tr>
                        <td>Haley Kennedy</td>
                        <td>Network Engineer</td>
                        <td>London</td>
                        <td>34</td>
                        <td>2012/12/18</td>
                        <td>$313,500</td>
                    </tr>
                    <tr>
                        <td>Tatyana Fitzpatrick</td>
                        <td>AI Specialist</td>
                        <td>London</td>
                        <td>19</td>
                        <td>2010/03/17</td>
                        <td>$70,000</td>
                    </tr>
                    <tr>
                        <td>Michael Silva</td>
                        <td>Business Analyst</td>
                        <td>London</td>
                        <td>27</td>
                        <td>2012/11/27</td>
                        <td>$50,000</td>
                    </tr>
                    <tr>
                        <td>Paul Byrd</td>
                        <td>IT Consultant</td>
                        <td>New York</td>
                        <td>34</td>
                        <td>2010/06/09</td>
                        <td>$75,000</td>
                    </tr>
                    <tr>
                        <td>Gloria Little</td>
                        <td>Systems Analyst</td>
                        <td>New York</td>
                        <td>32</td>
                        <td>2009/04/10</td>
                        <td>$60,000</td>
                    </tr>
                    <tr>
                        <td>Bradley Greer</td>
                        <td>Database Developer</td>
                        <td>London</td>
                        <td>31</td>
                        <td>2012/10/13</td>
                        <td>$55,000</td>
                    </tr>
                    <tr>
                        <td>Dai Rios</td>
                        <td>Network Security Engineer</td>
                        <td>Edinburgh</td>
                        <td>35</td>
                        <td>2012/09/26</td>
                        <td>$65,000</td>
                    </tr>
                    <tr>
                        <td>Jenette Caldwell</td>
                        <td>Mobile App Developer</td>
                        <td>New York</td>
                        <td>26</td>
                        <td>2011/09/03</td>
                        <td>$50,000</td>
                    </tr>
                    <tr>
                        <td>Yuri Berry</td>
                        <td>IT Manager</td>
                        <td>New York</td>
                        <td>30</td>
                        <td>2009/06/25</td>
                        <td>$80,000</td>
                    </tr>
                    <tr>
                        <td>Caesar Vance</td>
                        <td>QA Engineer</td>
                        <td>New York</td>
                        <td>21</td>
                        <td>2011/12/12</td>
                        <td>$55,000</td>
                    </tr>
                    <tr>
                        <td>Doris Wilder</td>
                        <td>Full-stack Developer</td>
                        <td>Sidney</td>
                        <td>33</td>
                        <td>2010/09/20</td>
                        <td>$60,000</td>
                    </tr>
                    <tr>
                        <td>Lin Xia</td>
                        <td>Data Scientist</td>
                        <td>China</td>
                        <td>34</td>
                        <td>2009/10/09</td>
                        <td>$70,000</td>
                    </tr>
                    <tr>
                        <td>Fatima Ali</td>
                        <td>IT Support Engineer</td>
                        <td>Pakistan</td>
                        <td>27</td>
                        <td>2010/12/22</td>
                        <td>$45,000</td>
                    </tr>
                    <tr>
                        <td>Jennifer Chang</td>
                        <td>Regional Director</td>
                        <td>Singapore</td>
                        <td>28</td>
                        <td>2010/11/14</td>
                        <td>$357,650</td>
                    </tr>
                    <tr>
                        <td>Brenden Wagner</td>
                        <td>Software Engineer</td>
                        <td>San Francisco</td>
                        <td>28</td>
                        <td>2011/06/07</td>
                        <td>$206,850</td>
                    </tr>
                    <tr>
                        <td>Fiona Green</td>
                        <td>Chief Operating Officer (COO)</td>
                        <td>San Francisco</td>
                        <td>48</td>
                        <td>2010/03/11</td>
                        <td>$850,000</td>
                    </tr>
                    <tr>
                        <td>Shou Itou</td>
                        <td>Regional Marketing</td>
                        <td>Tokyo</td>
                        <td>20</td>
                        <td>2011/08/14</td>
                        <td>$163,000</td>
                    </tr>
                    <tr>
                        <td>Michelle House</td>
                        <td>Integration Specialist</td>
                        <td>Sidney</td>
                        <td>37</td>
                        <td>2011/06/02</td>
                        <td>$95,400</td>
                    </tr>
                    <tr>
                        <td>Suki Burks</td>
                        <td>Developer</td>
                        <td>London</td>
                        <td>53</td>
                        <td>2009/10/22</td>
                        <td>$114,500</td>
                    </tr>
                    <tr>
                        <td>Prescott Bartlett</td>
                        <td>Technical Author</td>
                        <td>London</td>
                        <td>27</td>
                        <td>2011/05/07</td>
                        <td>$145,000</td>
                    </tr>
                    <tr>
                        <td>Gavin Cortez</td>
                        <td>Team Leader</td>
                        <td>San Francisco</td>
                        <td>22</td>
                        <td>2008/10/26</td>
                        <td>$235,500</td>
                    </tr>
                    <tr>
                        <td>Martena Mccray</td>
                        <td>Post-Sales support</td>
                        <td>Edinburgh</td>
                        <td>46</td>
                        <td>2011/03/09</td>
                        <td>$324,050</td>
                    </tr>
                    <tr>
                        <td>Unity Butler</td>
                        <td>Marketing Designer</td>
                        <td>San Francisco</td>
                        <td>47</td>
                        <td>2009/12/09</td>
                        <td>$85,675</td>
                    </tr>
                    <tr>
                        <td>Howard Hatfield</td>
                        <td>Office Manager</td>
                        <td>San Francisco</td>
                        <td>51</td>
                        <td>2008/12/16</td>
                        <td>$164,500</td>
                    </tr>
                    <tr>
                        <td>Hope Fuentes</td>
                        <td>Secretary</td>
                        <td>San Francisco</td>
                        <td>41</td>
                        <td>2010/02/12</td>
                        <td>$109,850</td>
                    </tr>
                    <tr>
                        <td>Vivian Harrell</td>
                        <td>Financial Controller</td>
                        <td>San Francisco</td>
                        <td>62</td>
                        <td>2009/02/14</td>
                        <td>$452,500</td>
                    </tr>
                    <tr>
                        <td>Timothy Mooney</td>
                        <td>Office Manager</td>
                        <td>London</td>
                        <td>37</td>
                        <td>2008/12/11</td>
                        <td>$136,200</td>
                    </tr>
                    <tr>
                        <td>Jackson Bradshaw</td>
                        <td>Director</td>
                        <td>New York</td>
                        <td>65</td>
                        <td>2008/09/26</td>
                        <td>$645,750</td>
                    </tr>
                    <tr>
                        <td>Olivia Liang</td>
                        <td>Support Engineer</td>
                        <td>Singapore</td>
                        <td>64</td>
                        <td>2011/02/03</td>
                        <td>$234,500</td>
                    </tr>
                    <tr>
                        <td>Bruno Nash</td>
                        <td>Software Engineer</td>
                        <td>London</td>
                        <td>38</td>
                        <td>2011/05/03</td>
                        <td>$163,500</td>
                    </tr>
                    <tr>
                        <td>Sakura Yamamoto</td>
                        <td>Support Engineer</td>
                        <td>Tokyo</td>
                        <td>37</td>
                        <td>2009/08/19</td>
                        <td>$139,575</td>
                    </tr>
                    <tr>
                        <td>Thor Walton</td>
                        <td>Developer</td>
                        <td>New York</td>
                        <td>61</td>
                        <td>2013/08/11</td>
                        <td>$98,540</td>
                    </tr>
                    <tr>
                        <td>Finn Camacho</td>
                        <td>Support Engineer</td>
                        <td>San Francisco</td>
                        <td>47</td>
                        <td>2009/07/07</td>
                        <td>$87,500</td>
                    </tr>
                    <tr>
                        <td>Serge Baldwin</td>
                        <td>Data Coordinator</td>
                        <td>Singapore</td>
                        <td>64</td>
                        <td>2012/04/09</td>
                        <td>$138,575</td>
                    </tr>
                    <tr>
                        <td>Ravi Patel</td>
                        <td>Full-stack Developer</td>
                        <td>India</td>
                        <td>31</td>
                        <td>2010/01/04</td>
                        <td>$55,000</td>
                    </tr>
                    <tr>
                        <td>Mariya Petrova</td>
                        <td>Database Administrator</td>
                        <td>Russia</td>
                        <td>28</td>
                        <td>2012/06/01</td>
                        <td>$60,000</td>
                    </tr>
                    <tr>
                        <td>Chang Li</td>
                        <td>IT Consultant</td>
                        <td>China</td>
                        <td>34</td>
                        <td>2013/02/01</td>
                        <td>$70,000</td>
                    </tr>
                    <tr>
                        <td>Carlos Hernandez</td>
                        <td>QA Engineer</td>
                        <td>Mexico</td>
                        <td>27</td>
                        <td>2011/12/06</td>
                        <td>$50,000</td>
                    </tr>
                    <tr>
                        <td>Rina Suzuki</td>
                        <td>UX Researcher</td>
                        <td>Japan</td>
                        <td>37</td>
                        <td>2011/03/21</td>
                        <td>$55,000</td>
                    </tr>
                    <tr>
                        <td>Marco Bianchi</td>
                        <td>Network Engineer</td>
                        <td>Italy</td>
                        <td>28</td>
                        <td>2009/02/27</td>
                        <td>$65,000</td>
                    </tr>
                    <tr>
                        <td>Alejandro Gomez</td>
                        <td>Software Developer</td>
                        <td>Spain</td>
                        <td>26</td>
                        <td>2010/07/14</td>
                        <td>$45,000</td>
                    </tr>
                    <tr>
                        <td>Kim Ji-hye</td>
                        <td>Data Scientist</td>
                        <td>South Korea</td>
                        <td>31</td>
                        <td>2008/11/13</td>
                        <td>$60,000</td>
                    </tr>
                    <tr>
                        <td>Thiago Santos</td>
                        <td>Cloud Architect</td>
                        <td>Brazil</td>
                        <td>29</td>
                        <td>2011/06/27</td>
                        <td>$65,000</td>
                    </tr>
                    <tr>
                        <td>Olga Smirnova</td>
                        <td>IT Project Manager</td>
                        <td>Russia</td>
                        <td>27</td>
                        <td>2011/01/25</td>
                        <td>$70,000</td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>
@endsection
