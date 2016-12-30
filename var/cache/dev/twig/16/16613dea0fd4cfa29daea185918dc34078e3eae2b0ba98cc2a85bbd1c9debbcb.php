<?php

/* fiche/index-accountant.html.twig */
class __TwigTemplate_ebacefb69343319d6a9754c87be9f108e2fdc174728da5484d0d4a15bd446147 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "fiche/index-accountant.html.twig", 1);
        $this->blocks = array(
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_f7fe8c1158f5175ff4fcfe0e913f1d81d75c69bbb17452c634d5fef658867627 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f7fe8c1158f5175ff4fcfe0e913f1d81d75c69bbb17452c634d5fef658867627->enter($__internal_f7fe8c1158f5175ff4fcfe0e913f1d81d75c69bbb17452c634d5fef658867627_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "fiche/index-accountant.html.twig"));

        $__internal_ef374334000f4c4403cdddbe39ceda2230704cb37308f29ad7c2ddb55a7dfe71 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ef374334000f4c4403cdddbe39ceda2230704cb37308f29ad7c2ddb55a7dfe71->enter($__internal_ef374334000f4c4403cdddbe39ceda2230704cb37308f29ad7c2ddb55a7dfe71_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "fiche/index-accountant.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_f7fe8c1158f5175ff4fcfe0e913f1d81d75c69bbb17452c634d5fef658867627->leave($__internal_f7fe8c1158f5175ff4fcfe0e913f1d81d75c69bbb17452c634d5fef658867627_prof);

        
        $__internal_ef374334000f4c4403cdddbe39ceda2230704cb37308f29ad7c2ddb55a7dfe71->leave($__internal_ef374334000f4c4403cdddbe39ceda2230704cb37308f29ad7c2ddb55a7dfe71_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_09878ceb8e1acd4d6869549638fed6c9be920599c242c49c60874d769816e7bc = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_09878ceb8e1acd4d6869549638fed6c9be920599c242c49c60874d769816e7bc->enter($__internal_09878ceb8e1acd4d6869549638fed6c9be920599c242c49c60874d769816e7bc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_f3fbf4acc8e7214f3e4d58d65d2faabff4ae73bcb4b540cd88e5e80fcd50cb1f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f3fbf4acc8e7214f3e4d58d65d2faabff4ae73bcb4b540cd88e5e80fcd50cb1f->enter($__internal_f3fbf4acc8e7214f3e4d58d65d2faabff4ae73bcb4b540cd88e5e80fcd50cb1f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "  <!-- Modal -->
      <div id=\"addFacture\" class=\"modal fade\" role=\"dialog\">
      <div class=\"modal-dialog\">
         <!-- Modal content-->
         <div class=\"modal-content\">
            <div class=\"modal-header\">
               <button type=\"button\" class=\"close\" data-dismiss=\"modal\">&times;</button>
               <h4 class=\"modal-title\">Invoice</h4>
            </div>
            <div class=\"modal-body\">
               <div class=\"row-fluid\">
                  <div class=\"span12\">
                     <div class=\"widget-box\">
                        <div class=\"widget-title\">
                           <span class=\"icon\"> <i class=\"fa fa-building\"> </i> </span>
                           <h5 >Payment</h5>
                        </div>
                        <div class=\"widget-content\">
                           <div class=\"row-fluid\">
                              <div class=\"span6\">
                                 <table class=\"\">
                                    <tbody>
                                       <tr>
                                          <td>
                                             <h4>OttoCar</h4>
                                          </td>
                                       </tr>
                                       <tr>
                                          <td>Tunisia</td>
                                       </tr>
                                       <tr>
                                          <td>El Manar</td>
                                       </tr>
                                       <tr>
                                          <td>Mobile Phone: +12 345 678</td>
                                       </tr>
                                       <tr>
                                          <td >OttoCar@company.com</td>
                                       </tr>
                                    </tbody>
                                 </table>
                              </div>
                              <div class=\"span6\">
                                 <table class=\"table table-bordered table-invoice\">
                                    <tbody>
                                       <tr>
                                       <tr>
                                          <td class=\"width30\">Invoice ID :</td>
                                          <td class=\"width70\"><strong>01</strong></td>
                                       </tr>
                                       <tr>
                                          <td>Date :</td>
                                          <td><strong>March 23, 2013</strong></td>
                                       </tr>
                                       <td class=\"width30\">Client :</td>
                                       <td class=\"width70\"><strong>Client Name</strong> <br>
                                          555 Otto Street., Tunis, <br>
                                          NYC 5555<br>
                                          Contact Number : 23 456-789 <br>
                                          Email: youremail@companyname.com 
                                       </td>
                                       </tr>
                                    </tbody>
                                 </table>
                              </div>
                           </div>
                           <div class=\"row-fluid\">
                              <div class=\"span12\">
                                 <form action=\"#\" method=\"get\" class=\"form-vertical\">
                                    <table class=\"table table-bordered table-invoice-full\">
                                       <thead>
                                          <tr>
                                             <th class=\"head0\">Type</th>
                                             <th class=\"head1\">Desc</th>
                                             <th class=\"head0 right\">Qty</th>
                                             <th class=\"head1 right\">Price</th>
                                             <th class=\"head0 right\">Amount</th>
                                             <th class=\"head1 right\"><button id=\"addRowInvoice\" class=\"btn btn-info\"><i class=\"fa fa-plus-circle\"></i></button></th>
                                          </tr>
                                       </thead>
                                       <tbody id=\"invoiceDetails\">
                                          <tr>
                                             <td>
                                                <div class=\"control-group\">
                                                   <div class=\"controls\">
                                                      <input type=\"text\" class=\"span6\" placeholder=\"Type\" />
                                                   </div>
                                                </div>
                                             </td>
                                             <td>
                                                <div class=\"control-group\">
                                                   <div class=\"controls\">
                                                      <textarea type=\"text\" placeholder=\"Description\" /></textarea>
                                                   </div>
                                                </div>
                                             </td>
                                             <td class=\"right\">
                                                <div class=\"control-group\">
                                                   <div class=\"controls\">
                                                      <input type=\"password\"  class=\"span6\" placeholder=\"Quantity\"  />
                                                   </div>
                                                </div>
                                             </td>
                                             <td class=\"right\">
                                                <div class=\"control-group\">
                                                   <div class=\"controls\">
                                                      <input type=\"text\" class=\"span6\" placeholder=\"Unit cost\" />
                                                   </div>
                                                </div>
                                             </td>
                                             <td class=\"right\">
                                                <strong>
                                                   <div class=\"control-group\">
                                                      <div class=\"controls\">
                                                         <input type=\"text\" readonly class=\"span6\" placeholder=\"Total\" />
                                                      </div>
                                                </strong>
                                             </td>
                                             <td><button class=\"btn btn-success\"><i class=\"fa fa-check\"></i> </button></td>
                                          </tr>
                                       </tbody>
                                    </table>
                                    <div class=\"pull-right\">
                                    <button type=\"submit\" class=\"btn btn-success\">Save</button>
                                    </div>

                                 </form>
                                 
                                 </div>
                              </div>
                           </div>
                        </div>
                     </div>
                  </div>
                  <div class=\"pull-right\">
                                 <h4><span>Amount Due:</span> \$7,650.00</h4>
                                 <br>
                                 </div>
               </div>

               <div class=\"modal-footer\">

                  <button type=\"button\" class=\"btn btn-danger\" data-dismiss=\"modal\">Close</button>
               </div>
            </div>
         </div>
      </div>
      <div class=\"widget-box\">
         <div class=\"widget-title\">
            <span class=\"icon\"><i class=\"fa fa-file-text-o\"></i></span>
            <h5>All Files</h5>
         </div>
         <div class=\"widget-content nopadding\">
            <table class=\"table table-bordered data-table\">
        <thead>
            <tr>
                     <th>Date</th>
                     <th>Client</th>
                     <th>Worker</th>
                     <th>Problem Description</th>
                     <th>Diagnocis</th>
                     <th>Solution</th>
                     <th>Repair Type</th>
                     <th>Cost</th>
                     <th>Status</th>
            </tr>
        </thead>
        <tbody>
        ";
        // line 172
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["fiches"]) ? $context["fiches"] : $this->getContext($context, "fiches")));
        foreach ($context['_seq'] as $context["_key"] => $context["fiche"]) {
            // line 173
            echo "            <tr>
                <td>";
            // line 174
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["fiche"], "datefiche", array()), "d/m/Y"), "html", null, true);
            echo "</td>
                <td>";
            // line 175
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["fiche"], "Client", array()), "prenomprop", array()), "html", null, true);
            echo "</td>
                <td>";
            // line 176
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["fiche"], "Emp", array()), "prenomemp", array()), "html", null, true);
            echo "</td>
                <td>";
            // line 177
            echo twig_escape_filter($this->env, $this->getAttribute($context["fiche"], "prestation", array()), "html", null, true);
            echo "</td>
                <td>";
            // line 178
            echo twig_escape_filter($this->env, $this->getAttribute($context["fiche"], "diagfiche", array()), "html", null, true);
            echo "</td>
                <td>";
            // line 179
            echo twig_escape_filter($this->env, $this->getAttribute($context["fiche"], "solutionfiche", array()), "html", null, true);
            echo "</td>
                <td>";
            // line 180
            echo twig_escape_filter($this->env, $this->getAttribute($context["fiche"], "typereparation", array()), "html", null, true);
            echo "</td>
                 <td><button type=\"button\" class=\"btn btn-link\" data-toggle=\"modal\" data-target=\"#addFacture\">NEEDS FIX</button></td>
                     <td>
                        <!-- Rounded switch -->
                        <input readonly type=\"checkbox\" disabled data-toggle=\"toggle\" data-on=\"Paid\" data-off=\"Unpaid\" data-onstyle=\"success\" data-width=\"50\" data-height=\"25\" /> 
                     </td>
               <!--  <td>
                    <ul>
                        <li>
                            <a href=\"";
            // line 189
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("fiche_show", array("id" => $this->getAttribute($context["fiche"], "id", array()))), "html", null, true);
            echo "\">show</a>
                        </li>
                        <li>
                            <a href=\"";
            // line 192
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("fiche_edit", array("id" => $this->getAttribute($context["fiche"], "id", array()))), "html", null, true);
            echo "\">edit</a>
                        </li>
                    </ul>
                </td> -->
            </tr>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['fiche'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 198
        echo "        </tbody>
    </table>
         </div>
      </div>
";
        
        $__internal_f3fbf4acc8e7214f3e4d58d65d2faabff4ae73bcb4b540cd88e5e80fcd50cb1f->leave($__internal_f3fbf4acc8e7214f3e4d58d65d2faabff4ae73bcb4b540cd88e5e80fcd50cb1f_prof);

        
        $__internal_09878ceb8e1acd4d6869549638fed6c9be920599c242c49c60874d769816e7bc->leave($__internal_09878ceb8e1acd4d6869549638fed6c9be920599c242c49c60874d769816e7bc_prof);

    }

    public function getTemplateName()
    {
        return "fiche/index-accountant.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  280 => 198,  268 => 192,  262 => 189,  250 => 180,  246 => 179,  242 => 178,  238 => 177,  234 => 176,  230 => 175,  226 => 174,  223 => 173,  219 => 172,  49 => 4,  40 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends 'base.html.twig' %}

{% block body %}
  <!-- Modal -->
      <div id=\"addFacture\" class=\"modal fade\" role=\"dialog\">
      <div class=\"modal-dialog\">
         <!-- Modal content-->
         <div class=\"modal-content\">
            <div class=\"modal-header\">
               <button type=\"button\" class=\"close\" data-dismiss=\"modal\">&times;</button>
               <h4 class=\"modal-title\">Invoice</h4>
            </div>
            <div class=\"modal-body\">
               <div class=\"row-fluid\">
                  <div class=\"span12\">
                     <div class=\"widget-box\">
                        <div class=\"widget-title\">
                           <span class=\"icon\"> <i class=\"fa fa-building\"> </i> </span>
                           <h5 >Payment</h5>
                        </div>
                        <div class=\"widget-content\">
                           <div class=\"row-fluid\">
                              <div class=\"span6\">
                                 <table class=\"\">
                                    <tbody>
                                       <tr>
                                          <td>
                                             <h4>OttoCar</h4>
                                          </td>
                                       </tr>
                                       <tr>
                                          <td>Tunisia</td>
                                       </tr>
                                       <tr>
                                          <td>El Manar</td>
                                       </tr>
                                       <tr>
                                          <td>Mobile Phone: +12 345 678</td>
                                       </tr>
                                       <tr>
                                          <td >OttoCar@company.com</td>
                                       </tr>
                                    </tbody>
                                 </table>
                              </div>
                              <div class=\"span6\">
                                 <table class=\"table table-bordered table-invoice\">
                                    <tbody>
                                       <tr>
                                       <tr>
                                          <td class=\"width30\">Invoice ID :</td>
                                          <td class=\"width70\"><strong>01</strong></td>
                                       </tr>
                                       <tr>
                                          <td>Date :</td>
                                          <td><strong>March 23, 2013</strong></td>
                                       </tr>
                                       <td class=\"width30\">Client :</td>
                                       <td class=\"width70\"><strong>Client Name</strong> <br>
                                          555 Otto Street., Tunis, <br>
                                          NYC 5555<br>
                                          Contact Number : 23 456-789 <br>
                                          Email: youremail@companyname.com 
                                       </td>
                                       </tr>
                                    </tbody>
                                 </table>
                              </div>
                           </div>
                           <div class=\"row-fluid\">
                              <div class=\"span12\">
                                 <form action=\"#\" method=\"get\" class=\"form-vertical\">
                                    <table class=\"table table-bordered table-invoice-full\">
                                       <thead>
                                          <tr>
                                             <th class=\"head0\">Type</th>
                                             <th class=\"head1\">Desc</th>
                                             <th class=\"head0 right\">Qty</th>
                                             <th class=\"head1 right\">Price</th>
                                             <th class=\"head0 right\">Amount</th>
                                             <th class=\"head1 right\"><button id=\"addRowInvoice\" class=\"btn btn-info\"><i class=\"fa fa-plus-circle\"></i></button></th>
                                          </tr>
                                       </thead>
                                       <tbody id=\"invoiceDetails\">
                                          <tr>
                                             <td>
                                                <div class=\"control-group\">
                                                   <div class=\"controls\">
                                                      <input type=\"text\" class=\"span6\" placeholder=\"Type\" />
                                                   </div>
                                                </div>
                                             </td>
                                             <td>
                                                <div class=\"control-group\">
                                                   <div class=\"controls\">
                                                      <textarea type=\"text\" placeholder=\"Description\" /></textarea>
                                                   </div>
                                                </div>
                                             </td>
                                             <td class=\"right\">
                                                <div class=\"control-group\">
                                                   <div class=\"controls\">
                                                      <input type=\"password\"  class=\"span6\" placeholder=\"Quantity\"  />
                                                   </div>
                                                </div>
                                             </td>
                                             <td class=\"right\">
                                                <div class=\"control-group\">
                                                   <div class=\"controls\">
                                                      <input type=\"text\" class=\"span6\" placeholder=\"Unit cost\" />
                                                   </div>
                                                </div>
                                             </td>
                                             <td class=\"right\">
                                                <strong>
                                                   <div class=\"control-group\">
                                                      <div class=\"controls\">
                                                         <input type=\"text\" readonly class=\"span6\" placeholder=\"Total\" />
                                                      </div>
                                                </strong>
                                             </td>
                                             <td><button class=\"btn btn-success\"><i class=\"fa fa-check\"></i> </button></td>
                                          </tr>
                                       </tbody>
                                    </table>
                                    <div class=\"pull-right\">
                                    <button type=\"submit\" class=\"btn btn-success\">Save</button>
                                    </div>

                                 </form>
                                 
                                 </div>
                              </div>
                           </div>
                        </div>
                     </div>
                  </div>
                  <div class=\"pull-right\">
                                 <h4><span>Amount Due:</span> \$7,650.00</h4>
                                 <br>
                                 </div>
               </div>

               <div class=\"modal-footer\">

                  <button type=\"button\" class=\"btn btn-danger\" data-dismiss=\"modal\">Close</button>
               </div>
            </div>
         </div>
      </div>
      <div class=\"widget-box\">
         <div class=\"widget-title\">
            <span class=\"icon\"><i class=\"fa fa-file-text-o\"></i></span>
            <h5>All Files</h5>
         </div>
         <div class=\"widget-content nopadding\">
            <table class=\"table table-bordered data-table\">
        <thead>
            <tr>
                     <th>Date</th>
                     <th>Client</th>
                     <th>Worker</th>
                     <th>Problem Description</th>
                     <th>Diagnocis</th>
                     <th>Solution</th>
                     <th>Repair Type</th>
                     <th>Cost</th>
                     <th>Status</th>
            </tr>
        </thead>
        <tbody>
        {% for fiche in fiches %}
            <tr>
                <td>{{ fiche.datefiche|date('d/m/Y') }}</td>
                <td>{{ fiche.Client.prenomprop }}</td>
                <td>{{ fiche.Emp.prenomemp }}</td>
                <td>{{ fiche.prestation }}</td>
                <td>{{ fiche.diagfiche }}</td>
                <td>{{ fiche.solutionfiche }}</td>
                <td>{{ fiche.typereparation }}</td>
                 <td><button type=\"button\" class=\"btn btn-link\" data-toggle=\"modal\" data-target=\"#addFacture\">NEEDS FIX</button></td>
                     <td>
                        <!-- Rounded switch -->
                        <input readonly type=\"checkbox\" disabled data-toggle=\"toggle\" data-on=\"Paid\" data-off=\"Unpaid\" data-onstyle=\"success\" data-width=\"50\" data-height=\"25\" /> 
                     </td>
               <!--  <td>
                    <ul>
                        <li>
                            <a href=\"{{ path('fiche_show', { 'id': fiche.id }) }}\">show</a>
                        </li>
                        <li>
                            <a href=\"{{ path('fiche_edit', { 'id': fiche.id }) }}\">edit</a>
                        </li>
                    </ul>
                </td> -->
            </tr>
        {% endfor %}
        </tbody>
    </table>
         </div>
      </div>
{% endblock %}
", "fiche/index-accountant.html.twig", "C:\\Users\\Admin\\Desktop\\OttoCar-BackEnd\\app\\Resources\\views\\fiche\\index-accountant.html.twig");
    }
}
