<?php

/* fiche/index-manager.html.twig */
class __TwigTemplate_7a0bf4bd0175880ebd15c75b10f26a1684d9a635cb7dfb93a9a6f7e1c9e900c5 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "fiche/index-manager.html.twig", 1);
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
        $__internal_574fda9445f4a8326466b100df5e100f5e84735f596f2e6cba7925415b3b3bee = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_574fda9445f4a8326466b100df5e100f5e84735f596f2e6cba7925415b3b3bee->enter($__internal_574fda9445f4a8326466b100df5e100f5e84735f596f2e6cba7925415b3b3bee_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "fiche/index-manager.html.twig"));

        $__internal_51d20958835d38f551580a85bf2db865f8a04a41db04d1ecf36dec665fd7342d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_51d20958835d38f551580a85bf2db865f8a04a41db04d1ecf36dec665fd7342d->enter($__internal_51d20958835d38f551580a85bf2db865f8a04a41db04d1ecf36dec665fd7342d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "fiche/index-manager.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_574fda9445f4a8326466b100df5e100f5e84735f596f2e6cba7925415b3b3bee->leave($__internal_574fda9445f4a8326466b100df5e100f5e84735f596f2e6cba7925415b3b3bee_prof);

        
        $__internal_51d20958835d38f551580a85bf2db865f8a04a41db04d1ecf36dec665fd7342d->leave($__internal_51d20958835d38f551580a85bf2db865f8a04a41db04d1ecf36dec665fd7342d_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_7a044fbfced5b17c65ef371c0de9393579ab7c541b84b57391861532bb487fa8 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_7a044fbfced5b17c65ef371c0de9393579ab7c541b84b57391861532bb487fa8->enter($__internal_7a044fbfced5b17c65ef371c0de9393579ab7c541b84b57391861532bb487fa8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_1a5b77eaaddce1d9a961d17f854641dea04e8234413cf1a9a5205cae6ff0a85a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1a5b77eaaddce1d9a961d17f854641dea04e8234413cf1a9a5205cae6ff0a85a->enter($__internal_1a5b77eaaddce1d9a961d17f854641dea04e8234413cf1a9a5205cae6ff0a85a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "<!-- Modal -->
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
          <div class=\"widget-title\"> <span class=\"icon\"> <i class=\"fa fa-building\"> </i> </span>
            <h5 >Payment</h5>
          </div>
          <div class=\"widget-content\">
            <div class=\"row-fluid\">
              <div class=\"span6\">
                <table class=\"\">
                  <tbody>
                    <tr>
                      <td><h4>OttoCar</h4></td>
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
                      Email: youremail@companyname.com </td>
                  </tr>
                    </tbody>
                  
                </table>
              </div>
            </div>
            <div class=\"row-fluid\">
              <div class=\"span12\">
                <table class=\"table table-bordered table-invoice-full\">
                  <thead>
                    <tr>
                      <th class=\"head0\">Type</th>
                      <th class=\"head1\">Desc</th>
                      <th class=\"head0 right\">Qty</th>
                      <th class=\"head1 right\">Price</th>
                      <th class=\"head0 right\">Amount</th>
                    </tr>
                  </thead>
                  <tbody>           
                     ";
        // line 84
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["pieces"]) ? $context["pieces"] : $this->getContext($context, "pieces")));
        foreach ($context['_seq'] as $context["_key"] => $context["piece"]) {
            // line 85
            echo "                    <tr>
                      <td>";
            // line 86
            echo twig_escape_filter($this->env, $this->getAttribute($context["piece"], "typepiece", array()), "html", null, true);
            echo "</td>
                      <td>";
            // line 87
            echo twig_escape_filter($this->env, $this->getAttribute($context["piece"], "libellepiece", array()), "html", null, true);
            echo "</td>
                      <td class=\"right\">WHAT TO WRITE HERE</td>
                      <td class=\"right\">";
            // line 89
            echo twig_escape_filter($this->env, $this->getAttribute($context["piece"], "prixpiece", array()), "html", null, true);
            echo "</td>
                      ";
            // line 90
            $context["total"] = (2 * $this->getAttribute($context["piece"], "prixpiece", array()));
            // line 91
            echo "                      <td class=\"right\"><strong>";
            echo twig_escape_filter($this->env, (isset($context["total"]) ? $context["total"] : $this->getContext($context, "total")), "html", null, true);
            echo "</strong></td>
                    </tr>
                     ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['piece'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 94
        echo "                  </tbody>
                </table>
                
                <div class=\"pull-right\">
                  <h4><span>Amount Due:</span> \$7,650.00</h4>
                  <br>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
                </div>
                <div class=\"modal-footer\">
                    <button type=\"button\" class=\"btn btn-danger\" data-dismiss=\"modal\">Close</button>
                </div>
            </div>


  </div>
</div>

    <div class=\"widget-box\">
          <div class=\"widget-title\"> <span class=\"icon\"><i class=\"fa fa-file-text-o\"></i></span>
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
        // line 137
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["fiches"]) ? $context["fiches"] : $this->getContext($context, "fiches")));
        foreach ($context['_seq'] as $context["_key"] => $context["fiche"]) {
            // line 138
            echo "            <tr>
                <td>";
            // line 139
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["fiche"], "datefiche", array()), "d/m/Y H:i:s"), "html", null, true);
            echo "</td>
                <td>";
            // line 140
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["fiche"], "Client", array()), "prenomprop", array()), "html", null, true);
            echo "</td>
                <td>";
            // line 141
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["fiche"], "Emp", array()), "prenomemp", array()), "html", null, true);
            echo "</td>
                <td>";
            // line 142
            echo twig_escape_filter($this->env, $this->getAttribute($context["fiche"], "prestation", array()), "html", null, true);
            echo "</td>
                <td>";
            // line 143
            echo twig_escape_filter($this->env, $this->getAttribute($context["fiche"], "diagfiche", array()), "html", null, true);
            echo "</td>
                <td>";
            // line 144
            echo twig_escape_filter($this->env, $this->getAttribute($context["fiche"], "solutionfiche", array()), "html", null, true);
            echo "</td>
                <td>";
            // line 145
            echo twig_escape_filter($this->env, $this->getAttribute($context["fiche"], "typereparation", array()), "html", null, true);
            echo "</td>
                <td><button type=\"button\" class=\"btn btn-link\" data-toggle=\"modal\" data-target=\"#addFacture\">NEEDS FIX</button></td>
                <td><!-- Rounded switch -->
                  <input readonly type=\"checkbox\" disabled data-toggle=\"toggle\" data-on=\"Paid\" data-off=\"Unpaid\" data-onstyle=\"success\" data-width=\"50\" data-height=\"25\" /> 
                </td>
                <!-- <td>
                    <ul>
                        <li>
                            <a href=\"";
            // line 153
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("fiche_show", array("id" => $this->getAttribute($context["fiche"], "id", array()))), "html", null, true);
            echo "\">show</a>
                        </li>
                        <li>
                            <a href=\"";
            // line 156
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
        // line 162
        echo "        </tbody>
  </table>
          </div>
    </div>
";
        
        $__internal_1a5b77eaaddce1d9a961d17f854641dea04e8234413cf1a9a5205cae6ff0a85a->leave($__internal_1a5b77eaaddce1d9a961d17f854641dea04e8234413cf1a9a5205cae6ff0a85a_prof);

        
        $__internal_7a044fbfced5b17c65ef371c0de9393579ab7c541b84b57391861532bb487fa8->leave($__internal_7a044fbfced5b17c65ef371c0de9393579ab7c541b84b57391861532bb487fa8_prof);

    }

    public function getTemplateName()
    {
        return "fiche/index-manager.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  268 => 162,  256 => 156,  250 => 153,  239 => 145,  235 => 144,  231 => 143,  227 => 142,  223 => 141,  219 => 140,  215 => 139,  212 => 138,  208 => 137,  163 => 94,  153 => 91,  151 => 90,  147 => 89,  142 => 87,  138 => 86,  135 => 85,  131 => 84,  49 => 4,  40 => 3,  11 => 1,);
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
          <div class=\"widget-title\"> <span class=\"icon\"> <i class=\"fa fa-building\"> </i> </span>
            <h5 >Payment</h5>
          </div>
          <div class=\"widget-content\">
            <div class=\"row-fluid\">
              <div class=\"span6\">
                <table class=\"\">
                  <tbody>
                    <tr>
                      <td><h4>OttoCar</h4></td>
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
                      Email: youremail@companyname.com </td>
                  </tr>
                    </tbody>
                  
                </table>
              </div>
            </div>
            <div class=\"row-fluid\">
              <div class=\"span12\">
                <table class=\"table table-bordered table-invoice-full\">
                  <thead>
                    <tr>
                      <th class=\"head0\">Type</th>
                      <th class=\"head1\">Desc</th>
                      <th class=\"head0 right\">Qty</th>
                      <th class=\"head1 right\">Price</th>
                      <th class=\"head0 right\">Amount</th>
                    </tr>
                  </thead>
                  <tbody>           
                     {% for piece in pieces %}
                    <tr>
                      <td>{{ piece.typepiece }}</td>
                      <td>{{ piece.libellepiece }}</td>
                      <td class=\"right\">WHAT TO WRITE HERE</td>
                      <td class=\"right\">{{ piece.prixpiece }}</td>
                      {% set total = 2 * piece.prixpiece%}
                      <td class=\"right\"><strong>{{ total }}</strong></td>
                    </tr>
                     {% endfor %}
                  </tbody>
                </table>
                
                <div class=\"pull-right\">
                  <h4><span>Amount Due:</span> \$7,650.00</h4>
                  <br>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
                </div>
                <div class=\"modal-footer\">
                    <button type=\"button\" class=\"btn btn-danger\" data-dismiss=\"modal\">Close</button>
                </div>
            </div>


  </div>
</div>

    <div class=\"widget-box\">
          <div class=\"widget-title\"> <span class=\"icon\"><i class=\"fa fa-file-text-o\"></i></span>
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
                <td>{{ fiche.datefiche|date('d/m/Y H:i:s') }}</td>
                <td>{{ fiche.Client.prenomprop }}</td>
                <td>{{ fiche.Emp.prenomemp }}</td>
                <td>{{ fiche.prestation }}</td>
                <td>{{ fiche.diagfiche }}</td>
                <td>{{ fiche.solutionfiche }}</td>
                <td>{{ fiche.typereparation }}</td>
                <td><button type=\"button\" class=\"btn btn-link\" data-toggle=\"modal\" data-target=\"#addFacture\">NEEDS FIX</button></td>
                <td><!-- Rounded switch -->
                  <input readonly type=\"checkbox\" disabled data-toggle=\"toggle\" data-on=\"Paid\" data-off=\"Unpaid\" data-onstyle=\"success\" data-width=\"50\" data-height=\"25\" /> 
                </td>
                <!-- <td>
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
", "fiche/index-manager.html.twig", "C:\\Users\\Admin\\Desktop\\OttoCar-BackEnd\\app\\Resources\\views\\fiche\\index-manager.html.twig");
    }
}
