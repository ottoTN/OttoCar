<?php

/* rapport/index-manager.html.twig */
class __TwigTemplate_eff43943bab5a972d9e3db664d719e4ac1fbfd5731fcfc79d9fa9ce5cf38c235 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "rapport/index-manager.html.twig", 1);
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
        $__internal_6b36995ab7d7a60b840e1409ec982bbafbc14881900b4d84f1571e823d6ae087 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_6b36995ab7d7a60b840e1409ec982bbafbc14881900b4d84f1571e823d6ae087->enter($__internal_6b36995ab7d7a60b840e1409ec982bbafbc14881900b4d84f1571e823d6ae087_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "rapport/index-manager.html.twig"));

        $__internal_dac971ba81bfea26ab09785ed5d5afa6356a7caa31a7e7cf2362dad5a1e7d699 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_dac971ba81bfea26ab09785ed5d5afa6356a7caa31a7e7cf2362dad5a1e7d699->enter($__internal_dac971ba81bfea26ab09785ed5d5afa6356a7caa31a7e7cf2362dad5a1e7d699_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "rapport/index-manager.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_6b36995ab7d7a60b840e1409ec982bbafbc14881900b4d84f1571e823d6ae087->leave($__internal_6b36995ab7d7a60b840e1409ec982bbafbc14881900b4d84f1571e823d6ae087_prof);

        
        $__internal_dac971ba81bfea26ab09785ed5d5afa6356a7caa31a7e7cf2362dad5a1e7d699->leave($__internal_dac971ba81bfea26ab09785ed5d5afa6356a7caa31a7e7cf2362dad5a1e7d699_prof);

    }

    // line 2
    public function block_body($context, array $blocks = array())
    {
        $__internal_4ee55f1394cd9cf76370b42e4925d3fe6f0df0c031783f30c26ef19d16c162ca = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_4ee55f1394cd9cf76370b42e4925d3fe6f0df0c031783f30c26ef19d16c162ca->enter($__internal_4ee55f1394cd9cf76370b42e4925d3fe6f0df0c031783f30c26ef19d16c162ca_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_8fee82e0335caf43e5984ea3d9e22e4ecb4b8a79eb42a7da6a9684d58648850b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8fee82e0335caf43e5984ea3d9e22e4ecb4b8a79eb42a7da6a9684d58648850b->enter($__internal_8fee82e0335caf43e5984ea3d9e22e4ecb4b8a79eb42a7da6a9684d58648850b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 3
        echo "<div class=\"container\">
   <div class=\"span12\">
      <div class=\"panel with-nav-tabs panel-primary\">
         <div class=\"panel-heading\">
            <ul class=\"nav nav-tabs\">
               <li class=\"active\"><a href=\"#tab1primary\" data-toggle=\"tab\">Daily</a></li>
               <li><a href=\"#tab2primary\" data-toggle=\"tab\">Weekly</a></li>
               <li><a href=\"#tab3primary\" data-toggle=\"tab\">Monthly</a></li>
               <li><a href=\"#tab4primary\" data-toggle=\"tab\">Yearly</a></li>
            </ul>
         </div>
         <div class=\"panel-body\">
            <div class=\"tab-content\">
               <div class=\"tab-pane fade in active\" id=\"tab1primary\">
                  <div class=\"container-fluid\">
                     <div class=\"widget-box\">
                        <div class=\"widget-title\">
                           <span class=\"icon\"><i class=\"fa fa-flag-o\"></i></span>
                           <h5>All Reports</h5>
                        </div>
                        <div class=\"widget-content nopadding\">
                           <table class=\"table table-bordered data-table\">
                              <thead>
                                 <tr>
                                    <th>Date</th>
                                    <th>Turnover</th>
                                    <th>Invoice</th>
                                    <th>Document</th>
                                 </tr>
                              </thead>
                              <tbody>
                                 ";
        // line 34
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["rapports"]) ? $context["rapports"] : $this->getContext($context, "rapports")));
        foreach ($context['_seq'] as $context["_key"] => $context["rapport"]) {
            // line 35
            echo "                                 <tr>
                                    <td>";
            // line 36
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["rapport"], "daterapport", array()), "d/m/Y H:i:s"), "html", null, true);
            echo "</td>
                                    <td>";
            // line 37
            echo twig_escape_filter($this->env, $this->getAttribute($context["rapport"], "totalrapport", array()), "html", null, true);
            echo "</td>
                                    <td><a class=\"fa fa-eye\" href=\"";
            // line 38
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("fiche_indexmanager");
            echo "\"> Show</a></td>
                                    <td>Download PDF</td>
                                    <!-- <td>
                                       <ul>
                                           <li>
                                               <a href=\"";
            // line 43
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("rapport_show", array("id" => $this->getAttribute($context["rapport"], "id", array()))), "html", null, true);
            echo "\">show</a>
                                           </li>
                                           <li>
                                               <a href=\"";
            // line 46
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("rapport_edit", array("id" => $this->getAttribute($context["rapport"], "id", array()))), "html", null, true);
            echo "\">edit</a>
                                           </li>
                                       </ul>
                                       </td> -->
                                 </tr>
                                 ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['rapport'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 52
        echo "                              </tbody>
                           </table>
                        </div>
                     </div>
                  </div>
               </div>
               <div class=\"tab-pane fade\" id=\"tab2primary\">
                  <div class=\"container-fluid\">
                     <div class=\"widget-box\">
                        <div class=\"widget-title\">
                           <span class=\"icon\"><i class=\"fa fa-flag-o\"></i></span>
                           <h5>All Reports</h5>
                        </div>
                        <div class=\"widget-content nopadding\">
                           <table class=\"table table-bordered data-table\">
                              <thead>
                                 <tr>
                                    <th>Date</th>
                                    <th>Turnover</th>
                                    <th>Invoice</th>
                                    <th>Document</th>
                                 </tr>
                              </thead>
                              <tbody>
                                 ";
        // line 76
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["rapports"]) ? $context["rapports"] : $this->getContext($context, "rapports")));
        foreach ($context['_seq'] as $context["_key"] => $context["rapport"]) {
            // line 77
            echo "                                 <tr>
                                    <td>";
            // line 78
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["rapport"], "daterapport", array()), "d/m/Y H:i:s"), "html", null, true);
            echo "</td>
                                    <td>";
            // line 79
            echo twig_escape_filter($this->env, $this->getAttribute($context["rapport"], "totalrapport", array()), "html", null, true);
            echo "</td>
                                    <td><a class=\"fa fa-eye\" href=\"";
            // line 80
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("fiche_indexmanager");
            echo "\"> Show</a></td>
                                    <td>Download PDF</td>
                                    <!-- <td>
                                       <ul>
                                           <li>
                                               <a href=\"";
            // line 85
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("rapport_show", array("id" => $this->getAttribute($context["rapport"], "id", array()))), "html", null, true);
            echo "\">show</a>
                                           </li>
                                           <li>
                                               <a href=\"";
            // line 88
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("rapport_edit", array("id" => $this->getAttribute($context["rapport"], "id", array()))), "html", null, true);
            echo "\">edit</a>
                                           </li>
                                       </ul>
                                       </td> -->
                                 </tr>
                                 ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['rapport'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 94
        echo "                              </tbody>
                           </table>
                        </div>
                     </div>
                  </div>
               </div>
               <div class=\"tab-pane fade\" id=\"tab3primary\">
                  <div class=\"container-fluid\">
                     <div class=\"widget-box\">
                        <div class=\"widget-title\">
                           <span class=\"icon\"><i class=\"fa fa-flag-o\"></i></span>
                           <h5>All Reports</h5>
                        </div>
                        <div class=\"widget-content nopadding\">
                           <table class=\"table table-bordered data-table\">
                              <thead>
                                 <tr>
                                    <th>Date</th>
                                    <th>Turnover</th>
                                    <th>Invoice</th>
                                    <th>Document</th>
                                 </tr>
                              </thead>
                              <tbody>
                                 ";
        // line 118
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["rapports"]) ? $context["rapports"] : $this->getContext($context, "rapports")));
        foreach ($context['_seq'] as $context["_key"] => $context["rapport"]) {
            // line 119
            echo "                                 <tr>
                                    <td>";
            // line 120
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["rapport"], "daterapport", array()), "d/m/Y H:i:s"), "html", null, true);
            echo "</td>
                                    <td>";
            // line 121
            echo twig_escape_filter($this->env, $this->getAttribute($context["rapport"], "totalrapport", array()), "html", null, true);
            echo "</td>
                                    <td><a class=\"fa fa-eye\" href=\"";
            // line 122
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("fiche_indexmanager");
            echo "\"> Show</a></td>
                                    <td>Download PDF</td>
                                    <!-- <td>
                                       <ul>
                                           <li>
                                               <a href=\"";
            // line 127
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("rapport_show", array("id" => $this->getAttribute($context["rapport"], "id", array()))), "html", null, true);
            echo "\">show</a>
                                           </li>
                                           <li>
                                               <a href=\"";
            // line 130
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("rapport_edit", array("id" => $this->getAttribute($context["rapport"], "id", array()))), "html", null, true);
            echo "\">edit</a>
                                           </li>
                                       </ul>
                                       </td> -->
                                 </tr>
                                 ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['rapport'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 136
        echo "                              </tbody>
                           </table>
                        </div>
                     </div>
                  </div>
               </div>
               <div class=\"tab-pane fade\" id=\"tab4primary\">
                  <div class=\"container-fluid\">
                     <div class=\"widget-box\">
                        <div class=\"widget-title\">
                           <span class=\"icon\"><i class=\"fa fa-flag-o\"></i></span>
                           <h5>All Reports</h5>
                        </div>
                        <div class=\"widget-content nopadding\">
                           <table class=\"table table-bordered data-table\">
                              <thead>
                                 <tr>
                                    <th>Date</th>
                                    <th>Turnover</th>
                                    <th>Invoice</th>
                                    <th>Document</th>
                                 </tr>
                              </thead>
                              <tbody>
                                 ";
        // line 160
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["rapports"]) ? $context["rapports"] : $this->getContext($context, "rapports")));
        foreach ($context['_seq'] as $context["_key"] => $context["rapport"]) {
            // line 161
            echo "                                 <tr>
                                    <td>";
            // line 162
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["rapport"], "daterapport", array()), "d/m/Y H:i:s"), "html", null, true);
            echo "</td>
                                    <td>";
            // line 163
            echo twig_escape_filter($this->env, $this->getAttribute($context["rapport"], "totalrapport", array()), "html", null, true);
            echo "</td>
                                    <td><a class=\"fa fa-eye\" href=\"";
            // line 164
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("fiche_indexmanager");
            echo "\"> Show</a></td>
                                    <td>Download PDF</td>
                                    <!-- <td>
                                       <ul>
                                           <li>
                                               <a href=\"";
            // line 169
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("rapport_show", array("id" => $this->getAttribute($context["rapport"], "id", array()))), "html", null, true);
            echo "\">show</a>
                                           </li>
                                           <li>
                                               <a href=\"";
            // line 172
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("rapport_edit", array("id" => $this->getAttribute($context["rapport"], "id", array()))), "html", null, true);
            echo "\">edit</a>
                                           </li>
                                       </ul>
                                       </td> -->
                                 </tr>
                                 ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['rapport'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 178
        echo "                              </tbody>
                           </table>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
         </div>
      </div>
   </div>
</div>
<!-- <ul>
   <li>
       <a href=\"";
        // line 191
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("rapport_new");
        echo "\">Create a new rapport</a>
   </li>
   </ul> -->
";
        
        $__internal_8fee82e0335caf43e5984ea3d9e22e4ecb4b8a79eb42a7da6a9684d58648850b->leave($__internal_8fee82e0335caf43e5984ea3d9e22e4ecb4b8a79eb42a7da6a9684d58648850b_prof);

        
        $__internal_4ee55f1394cd9cf76370b42e4925d3fe6f0df0c031783f30c26ef19d16c162ca->leave($__internal_4ee55f1394cd9cf76370b42e4925d3fe6f0df0c031783f30c26ef19d16c162ca_prof);

    }

    public function getTemplateName()
    {
        return "rapport/index-manager.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  339 => 191,  324 => 178,  312 => 172,  306 => 169,  298 => 164,  294 => 163,  290 => 162,  287 => 161,  283 => 160,  257 => 136,  245 => 130,  239 => 127,  231 => 122,  227 => 121,  223 => 120,  220 => 119,  216 => 118,  190 => 94,  178 => 88,  172 => 85,  164 => 80,  160 => 79,  156 => 78,  153 => 77,  149 => 76,  123 => 52,  111 => 46,  105 => 43,  97 => 38,  93 => 37,  89 => 36,  86 => 35,  82 => 34,  49 => 3,  40 => 2,  11 => 1,);
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
<div class=\"container\">
   <div class=\"span12\">
      <div class=\"panel with-nav-tabs panel-primary\">
         <div class=\"panel-heading\">
            <ul class=\"nav nav-tabs\">
               <li class=\"active\"><a href=\"#tab1primary\" data-toggle=\"tab\">Daily</a></li>
               <li><a href=\"#tab2primary\" data-toggle=\"tab\">Weekly</a></li>
               <li><a href=\"#tab3primary\" data-toggle=\"tab\">Monthly</a></li>
               <li><a href=\"#tab4primary\" data-toggle=\"tab\">Yearly</a></li>
            </ul>
         </div>
         <div class=\"panel-body\">
            <div class=\"tab-content\">
               <div class=\"tab-pane fade in active\" id=\"tab1primary\">
                  <div class=\"container-fluid\">
                     <div class=\"widget-box\">
                        <div class=\"widget-title\">
                           <span class=\"icon\"><i class=\"fa fa-flag-o\"></i></span>
                           <h5>All Reports</h5>
                        </div>
                        <div class=\"widget-content nopadding\">
                           <table class=\"table table-bordered data-table\">
                              <thead>
                                 <tr>
                                    <th>Date</th>
                                    <th>Turnover</th>
                                    <th>Invoice</th>
                                    <th>Document</th>
                                 </tr>
                              </thead>
                              <tbody>
                                 {% for rapport in rapports %}
                                 <tr>
                                    <td>{{ rapport.daterapport|date('d/m/Y H:i:s') }}</td>
                                    <td>{{ rapport.totalrapport }}</td>
                                    <td><a class=\"fa fa-eye\" href=\"{{ path('fiche_indexmanager') }}\"> Show</a></td>
                                    <td>Download PDF</td>
                                    <!-- <td>
                                       <ul>
                                           <li>
                                               <a href=\"{{ path('rapport_show', { 'id': rapport.id }) }}\">show</a>
                                           </li>
                                           <li>
                                               <a href=\"{{ path('rapport_edit', { 'id': rapport.id }) }}\">edit</a>
                                           </li>
                                       </ul>
                                       </td> -->
                                 </tr>
                                 {% endfor %}
                              </tbody>
                           </table>
                        </div>
                     </div>
                  </div>
               </div>
               <div class=\"tab-pane fade\" id=\"tab2primary\">
                  <div class=\"container-fluid\">
                     <div class=\"widget-box\">
                        <div class=\"widget-title\">
                           <span class=\"icon\"><i class=\"fa fa-flag-o\"></i></span>
                           <h5>All Reports</h5>
                        </div>
                        <div class=\"widget-content nopadding\">
                           <table class=\"table table-bordered data-table\">
                              <thead>
                                 <tr>
                                    <th>Date</th>
                                    <th>Turnover</th>
                                    <th>Invoice</th>
                                    <th>Document</th>
                                 </tr>
                              </thead>
                              <tbody>
                                 {% for rapport in rapports %}
                                 <tr>
                                    <td>{{ rapport.daterapport|date('d/m/Y H:i:s') }}</td>
                                    <td>{{ rapport.totalrapport }}</td>
                                    <td><a class=\"fa fa-eye\" href=\"{{ path('fiche_indexmanager') }}\"> Show</a></td>
                                    <td>Download PDF</td>
                                    <!-- <td>
                                       <ul>
                                           <li>
                                               <a href=\"{{ path('rapport_show', { 'id': rapport.id }) }}\">show</a>
                                           </li>
                                           <li>
                                               <a href=\"{{ path('rapport_edit', { 'id': rapport.id }) }}\">edit</a>
                                           </li>
                                       </ul>
                                       </td> -->
                                 </tr>
                                 {% endfor %}
                              </tbody>
                           </table>
                        </div>
                     </div>
                  </div>
               </div>
               <div class=\"tab-pane fade\" id=\"tab3primary\">
                  <div class=\"container-fluid\">
                     <div class=\"widget-box\">
                        <div class=\"widget-title\">
                           <span class=\"icon\"><i class=\"fa fa-flag-o\"></i></span>
                           <h5>All Reports</h5>
                        </div>
                        <div class=\"widget-content nopadding\">
                           <table class=\"table table-bordered data-table\">
                              <thead>
                                 <tr>
                                    <th>Date</th>
                                    <th>Turnover</th>
                                    <th>Invoice</th>
                                    <th>Document</th>
                                 </tr>
                              </thead>
                              <tbody>
                                 {% for rapport in rapports %}
                                 <tr>
                                    <td>{{ rapport.daterapport|date('d/m/Y H:i:s') }}</td>
                                    <td>{{ rapport.totalrapport }}</td>
                                    <td><a class=\"fa fa-eye\" href=\"{{ path('fiche_indexmanager') }}\"> Show</a></td>
                                    <td>Download PDF</td>
                                    <!-- <td>
                                       <ul>
                                           <li>
                                               <a href=\"{{ path('rapport_show', { 'id': rapport.id }) }}\">show</a>
                                           </li>
                                           <li>
                                               <a href=\"{{ path('rapport_edit', { 'id': rapport.id }) }}\">edit</a>
                                           </li>
                                       </ul>
                                       </td> -->
                                 </tr>
                                 {% endfor %}
                              </tbody>
                           </table>
                        </div>
                     </div>
                  </div>
               </div>
               <div class=\"tab-pane fade\" id=\"tab4primary\">
                  <div class=\"container-fluid\">
                     <div class=\"widget-box\">
                        <div class=\"widget-title\">
                           <span class=\"icon\"><i class=\"fa fa-flag-o\"></i></span>
                           <h5>All Reports</h5>
                        </div>
                        <div class=\"widget-content nopadding\">
                           <table class=\"table table-bordered data-table\">
                              <thead>
                                 <tr>
                                    <th>Date</th>
                                    <th>Turnover</th>
                                    <th>Invoice</th>
                                    <th>Document</th>
                                 </tr>
                              </thead>
                              <tbody>
                                 {% for rapport in rapports %}
                                 <tr>
                                    <td>{{ rapport.daterapport|date('d/m/Y H:i:s') }}</td>
                                    <td>{{ rapport.totalrapport }}</td>
                                    <td><a class=\"fa fa-eye\" href=\"{{ path('fiche_indexmanager') }}\"> Show</a></td>
                                    <td>Download PDF</td>
                                    <!-- <td>
                                       <ul>
                                           <li>
                                               <a href=\"{{ path('rapport_show', { 'id': rapport.id }) }}\">show</a>
                                           </li>
                                           <li>
                                               <a href=\"{{ path('rapport_edit', { 'id': rapport.id }) }}\">edit</a>
                                           </li>
                                       </ul>
                                       </td> -->
                                 </tr>
                                 {% endfor %}
                              </tbody>
                           </table>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
         </div>
      </div>
   </div>
</div>
<!-- <ul>
   <li>
       <a href=\"{{ path('rapport_new') }}\">Create a new rapport</a>
   </li>
   </ul> -->
{% endblock %}", "rapport/index-manager.html.twig", "C:\\Users\\Admin\\Desktop\\OttoCar-BackEnd\\app\\Resources\\views\\rapport\\index-manager.html.twig");
    }
}
