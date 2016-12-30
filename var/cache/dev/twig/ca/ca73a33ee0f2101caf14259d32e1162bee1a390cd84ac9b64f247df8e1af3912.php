<?php

/* rapport/index-accountant.html.twig */
class __TwigTemplate_6925291fc067c5d1a16e4de9de4aa1d7065398e85d61d78eb4a5183b4a9c7e2c extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "rapport/index-accountant.html.twig", 1);
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
        $__internal_adf0e3f452774aea8dc2676e3b27614f56dde2bca0ec2def00ab3cfc6b8f823d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_adf0e3f452774aea8dc2676e3b27614f56dde2bca0ec2def00ab3cfc6b8f823d->enter($__internal_adf0e3f452774aea8dc2676e3b27614f56dde2bca0ec2def00ab3cfc6b8f823d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "rapport/index-accountant.html.twig"));

        $__internal_9a890c165010db2c2ff7790de425f8e726e53529e4ebe7fafdc2518033609476 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9a890c165010db2c2ff7790de425f8e726e53529e4ebe7fafdc2518033609476->enter($__internal_9a890c165010db2c2ff7790de425f8e726e53529e4ebe7fafdc2518033609476_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "rapport/index-accountant.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_adf0e3f452774aea8dc2676e3b27614f56dde2bca0ec2def00ab3cfc6b8f823d->leave($__internal_adf0e3f452774aea8dc2676e3b27614f56dde2bca0ec2def00ab3cfc6b8f823d_prof);

        
        $__internal_9a890c165010db2c2ff7790de425f8e726e53529e4ebe7fafdc2518033609476->leave($__internal_9a890c165010db2c2ff7790de425f8e726e53529e4ebe7fafdc2518033609476_prof);

    }

    // line 2
    public function block_body($context, array $blocks = array())
    {
        $__internal_c15a8e80a473da9d34835fe42706e7d9654aaf2aae96c90269a017650eb970d4 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c15a8e80a473da9d34835fe42706e7d9654aaf2aae96c90269a017650eb970d4->enter($__internal_c15a8e80a473da9d34835fe42706e7d9654aaf2aae96c90269a017650eb970d4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_73d90d5a4ba6b9fa721239279063894665c39e28b7679a81f3839d8b833d1dc5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_73d90d5a4ba6b9fa721239279063894665c39e28b7679a81f3839d8b833d1dc5->enter($__internal_73d90d5a4ba6b9fa721239279063894665c39e28b7679a81f3839d8b833d1dc5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
                           <div style=\"padding-top: 0.2%\"><a class=\"btn btn-info\"  href=\"";
        // line 22
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("rapport_new");
        echo "\"><i class=\"fa fa-plus-circle\"></i></a></div>
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
        // line 35
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["rapports"]) ? $context["rapports"] : $this->getContext($context, "rapports")));
        foreach ($context['_seq'] as $context["_key"] => $context["rapport"]) {
            // line 36
            echo "                                 <tr>
                                    <td>";
            // line 37
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["rapport"], "daterapport", array()), "d/m/Y H:i:s"), "html", null, true);
            echo "</td>
                                    <td>";
            // line 38
            echo twig_escape_filter($this->env, $this->getAttribute($context["rapport"], "totalrapport", array()), "html", null, true);
            echo "</td>
                                    <td><a class=\"fa fa-eye\" href=\"";
            // line 39
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("fiche_indexmanager");
            echo "\"> Show</a></td>
                                    <td>Download PDF</td>
                                    <!-- <td>
                                       <ul>
                                           <li>
                                               <a href=\"";
            // line 44
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("rapport_show", array("id" => $this->getAttribute($context["rapport"], "id", array()))), "html", null, true);
            echo "\">show</a>
                                           </li>
                                           <li>
                                               <a href=\"";
            // line 47
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
        // line 53
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
        // line 77
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["rapports"]) ? $context["rapports"] : $this->getContext($context, "rapports")));
        foreach ($context['_seq'] as $context["_key"] => $context["rapport"]) {
            // line 78
            echo "                                 <tr>
                                    <td>";
            // line 79
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["rapport"], "daterapport", array()), "d/m/Y H:i:s"), "html", null, true);
            echo "</td>
                                    <td>";
            // line 80
            echo twig_escape_filter($this->env, $this->getAttribute($context["rapport"], "totalrapport", array()), "html", null, true);
            echo "</td>
                                    <td><a class=\"fa fa-eye\" href=\"";
            // line 81
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("fiche_indexmanager");
            echo "\"> Show</a></td>
                                    <td>Download PDF</td>
                                    <!-- <td>
                                       <ul>
                                           <li>
                                               <a href=\"";
            // line 86
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("rapport_show", array("id" => $this->getAttribute($context["rapport"], "id", array()))), "html", null, true);
            echo "\">show</a>
                                           </li>
                                           <li>
                                               <a href=\"";
            // line 89
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
        // line 95
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
        // line 119
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["rapports"]) ? $context["rapports"] : $this->getContext($context, "rapports")));
        foreach ($context['_seq'] as $context["_key"] => $context["rapport"]) {
            // line 120
            echo "                                 <tr>
                                    <td>";
            // line 121
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["rapport"], "daterapport", array()), "d/m/Y H:i:s"), "html", null, true);
            echo "</td>
                                    <td>";
            // line 122
            echo twig_escape_filter($this->env, $this->getAttribute($context["rapport"], "totalrapport", array()), "html", null, true);
            echo "</td>
                                    <td><a class=\"fa fa-eye\" href=\"";
            // line 123
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("fiche_indexmanager");
            echo "\"> Show</a></td>
                                    <td>Download PDF</td>
                                    <!-- <td>
                                       <ul>
                                           <li>
                                               <a href=\"";
            // line 128
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("rapport_show", array("id" => $this->getAttribute($context["rapport"], "id", array()))), "html", null, true);
            echo "\">show</a>
                                           </li>
                                           <li>
                                               <a href=\"";
            // line 131
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
        // line 137
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
        // line 161
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["rapports"]) ? $context["rapports"] : $this->getContext($context, "rapports")));
        foreach ($context['_seq'] as $context["_key"] => $context["rapport"]) {
            // line 162
            echo "                                 <tr>
                                    <td>";
            // line 163
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["rapport"], "daterapport", array()), "d/m/Y H:i:s"), "html", null, true);
            echo "</td>
                                    <td>";
            // line 164
            echo twig_escape_filter($this->env, $this->getAttribute($context["rapport"], "totalrapport", array()), "html", null, true);
            echo "</td>
                                    <td><a class=\"fa fa-eye\" href=\"";
            // line 165
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("fiche_indexmanager");
            echo "\"> Show</a></td>
                                    <td>Download PDF</td>
                                    <!-- <td>
                                       <ul>
                                           <li>
                                               <a href=\"";
            // line 170
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("rapport_show", array("id" => $this->getAttribute($context["rapport"], "id", array()))), "html", null, true);
            echo "\">show</a>
                                           </li>
                                           <li>
                                               <a href=\"";
            // line 173
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
        // line 179
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
        // line 192
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("rapport_new");
        echo "\">Create a new rapport</a>
   </li>
   </ul> -->
";
        
        $__internal_73d90d5a4ba6b9fa721239279063894665c39e28b7679a81f3839d8b833d1dc5->leave($__internal_73d90d5a4ba6b9fa721239279063894665c39e28b7679a81f3839d8b833d1dc5_prof);

        
        $__internal_c15a8e80a473da9d34835fe42706e7d9654aaf2aae96c90269a017650eb970d4->leave($__internal_c15a8e80a473da9d34835fe42706e7d9654aaf2aae96c90269a017650eb970d4_prof);

    }

    public function getTemplateName()
    {
        return "rapport/index-accountant.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  343 => 192,  328 => 179,  316 => 173,  310 => 170,  302 => 165,  298 => 164,  294 => 163,  291 => 162,  287 => 161,  261 => 137,  249 => 131,  243 => 128,  235 => 123,  231 => 122,  227 => 121,  224 => 120,  220 => 119,  194 => 95,  182 => 89,  176 => 86,  168 => 81,  164 => 80,  160 => 79,  157 => 78,  153 => 77,  127 => 53,  115 => 47,  109 => 44,  101 => 39,  97 => 38,  93 => 37,  90 => 36,  86 => 35,  70 => 22,  49 => 3,  40 => 2,  11 => 1,);
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
                           <div style=\"padding-top: 0.2%\"><a class=\"btn btn-info\"  href=\"{{ path('rapport_new') }}\"><i class=\"fa fa-plus-circle\"></i></a></div>
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
{% endblock %}", "rapport/index-accountant.html.twig", "C:\\Users\\Admin\\Desktop\\OttoCar-BackEnd\\app\\Resources\\views\\rapport\\index-accountant.html.twig");
    }
}
