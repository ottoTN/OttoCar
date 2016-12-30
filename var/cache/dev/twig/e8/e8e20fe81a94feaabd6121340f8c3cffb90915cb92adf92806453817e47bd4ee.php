<?php

/* fiche/index-receptionnist.html.twig */
class __TwigTemplate_c01e7e692950026e2b3e2e0a681fa138fc29e2dd38afdd1b7ee1497f53752881 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "fiche/index-receptionnist.html.twig", 1);
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
        $__internal_ea2d9a9c9a2f2f8f11ea399c9f48f3f34cb7ff6ce72dd5b5b8c9038789033601 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ea2d9a9c9a2f2f8f11ea399c9f48f3f34cb7ff6ce72dd5b5b8c9038789033601->enter($__internal_ea2d9a9c9a2f2f8f11ea399c9f48f3f34cb7ff6ce72dd5b5b8c9038789033601_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "fiche/index-receptionnist.html.twig"));

        $__internal_9819ab2e2569b5a2f945ca5151be310060d24afc867cd291d79dcecaab98fd5f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9819ab2e2569b5a2f945ca5151be310060d24afc867cd291d79dcecaab98fd5f->enter($__internal_9819ab2e2569b5a2f945ca5151be310060d24afc867cd291d79dcecaab98fd5f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "fiche/index-receptionnist.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_ea2d9a9c9a2f2f8f11ea399c9f48f3f34cb7ff6ce72dd5b5b8c9038789033601->leave($__internal_ea2d9a9c9a2f2f8f11ea399c9f48f3f34cb7ff6ce72dd5b5b8c9038789033601_prof);

        
        $__internal_9819ab2e2569b5a2f945ca5151be310060d24afc867cd291d79dcecaab98fd5f->leave($__internal_9819ab2e2569b5a2f945ca5151be310060d24afc867cd291d79dcecaab98fd5f_prof);

    }

    // line 2
    public function block_body($context, array $blocks = array())
    {
        $__internal_15f9b1cce5801c5fd90e22bdfd09b31bd4c269e54b220afc5e1f37e5dd563816 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_15f9b1cce5801c5fd90e22bdfd09b31bd4c269e54b220afc5e1f37e5dd563816->enter($__internal_15f9b1cce5801c5fd90e22bdfd09b31bd4c269e54b220afc5e1f37e5dd563816_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_f2c5111c70c3632e7b077b4a581e611579ec57db194561218e5c81a696a84285 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f2c5111c70c3632e7b077b4a581e611579ec57db194561218e5c81a696a84285->enter($__internal_f2c5111c70c3632e7b077b4a581e611579ec57db194561218e5c81a696a84285_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 3
        echo "                                            <!-- RECEPTIONNIST -->
<!-- Modal -->
<div id=\"addFacture\" class=\"modal fade\" role=\"dialog\">
        <div class=\"modal-dialog\">

            <!-- Modal content-->
            <div class=\"modal-content\">
                <div class=\"modal-header\">
                    <button type=\"button\" class=\"close\" data-dismiss=\"modal\">&times;</button>
                    <h4 class=\"modal-title\">Bill</h4>
                </div>
                <div class=\"modal-body\">
                


                        <div class=\"row-fluid\">
      <div class=\"span12\">
        <div class=\"widget-box\">
          <div class=\"widget-title\"> <span class=\"icon\"> <i class=\"icon-briefcase\"></i> </span>
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
                  <button id=\"payInvoice\" class=\"btn btn-primary btn-large pull-right\">Pay Invoice</button> </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
                </div>
                <div class=\"modal-footer\">
                    <button type=\"button\" class=\"btn btn-default\" data-dismiss=\"modal\">Close</button>
                </div>
            </div>


  </div>
</div>

    <div class=\"widget-box\">
          <div class=\"widget-title\"> <span class=\"icon\"><i class=\"fa fa-file-text-o\"></i></span>
            <h5>All Files</h5>
            <div style=\"padding-top: 0.2%\"><a class=\"btn btn-info\"  href=\"";
        // line 119
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("fiche_new");
        echo "\"><i class=\"fa fa-plus-circle\"></i></a></div>
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
                  <th>Actions</th>
            </tr>
        </thead>
        <tbody>
        ";
        // line 138
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["fiches"]) ? $context["fiches"] : $this->getContext($context, "fiches")));
        foreach ($context['_seq'] as $context["_key"] => $context["fiche"]) {
            // line 139
            echo "            <tr>
                <td><a href=\"";
            // line 140
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("fiche_show", array("id" => $this->getAttribute($context["fiche"], "id", array()))), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["fiche"], "datefiche", array()), "Y-m-d H:i:s"), "html", null, true);
            echo "</a></td>
                <td>";
            // line 141
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["fiche"], "Client", array()), "prenomprop", array()), "html", null, true);
            echo "</td>
                <td>";
            // line 142
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["fiche"], "Emp", array()), "prenomemp", array()), "html", null, true);
            echo "</td>
                <td>";
            // line 143
            echo twig_escape_filter($this->env, $this->getAttribute($context["fiche"], "prestation", array()), "html", null, true);
            echo " </td>
                <td>";
            // line 144
            echo twig_escape_filter($this->env, $this->getAttribute($context["fiche"], "diagfiche", array()), "html", null, true);
            echo "</td>
                <td>";
            // line 145
            echo twig_escape_filter($this->env, $this->getAttribute($context["fiche"], "solutionfiche", array()), "html", null, true);
            echo "</td>
                <td>";
            // line 146
            echo twig_escape_filter($this->env, $this->getAttribute($context["fiche"], "typereparation", array()), "html", null, true);
            echo "</td>
                <td><button type=\"button\" id=\"cost\" class=\"btn btn-link\" data-toggle=\"modal\" data-target=\"#addFacture\">0,00 TND</button></td>
                <td><!-- Rounded switch -->
                  <div id=\"invoiceStatus1\" >
                  <input type=\"checkbox\" disabled data-toggle=\"toggle\" data-on=\"Paid\" data-off=\"Unpaid\" data-onstyle=\"success\" data-width=\"50\" data-height=\"25\" /> 
                  </div>
                </td>
                <td>
                <a class=\"btn btn-warning\" href=\"";
            // line 154
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("fiche_edit", array("id" => $this->getAttribute($context["fiche"], "id", array()))), "html", null, true);
            echo "\">Edit</a>
                <button class=\"btn btn-danger\" data-href=\"/delete.php?id=54\" data-toggle=\"modal\" data-target=\"#confirm-delete\">
                Delete </button>
                    <!-- <ul>
                        <li>
                            <a href=\"";
            // line 159
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("fiche_show", array("id" => $this->getAttribute($context["fiche"], "id", array()))), "html", null, true);
            echo "\">show</a>
                        </li>
                        <li>
                            <a href=\"";
            // line 162
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("fiche_edit", array("id" => $this->getAttribute($context["fiche"], "id", array()))), "html", null, true);
            echo "\">edit</a>
                        </li>
                    </ul> -->
                </td>
            </tr>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['fiche'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 168
        echo "        </tbody>
 </table>
          </div>
    </div>


    <ul>
        <li>
            <a href=\"";
        // line 176
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("fiche_new");
        echo "\">Create a new fiche</a>
        </li>
    </ul>
";
        
        $__internal_f2c5111c70c3632e7b077b4a581e611579ec57db194561218e5c81a696a84285->leave($__internal_f2c5111c70c3632e7b077b4a581e611579ec57db194561218e5c81a696a84285_prof);

        
        $__internal_15f9b1cce5801c5fd90e22bdfd09b31bd4c269e54b220afc5e1f37e5dd563816->leave($__internal_15f9b1cce5801c5fd90e22bdfd09b31bd4c269e54b220afc5e1f37e5dd563816_prof);

    }

    public function getTemplateName()
    {
        return "fiche/index-receptionnist.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  293 => 176,  283 => 168,  271 => 162,  265 => 159,  257 => 154,  246 => 146,  242 => 145,  238 => 144,  234 => 143,  230 => 142,  226 => 141,  220 => 140,  217 => 139,  213 => 138,  191 => 119,  164 => 94,  154 => 91,  152 => 90,  148 => 89,  143 => 87,  139 => 86,  136 => 85,  132 => 84,  49 => 3,  40 => 2,  11 => 1,);
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
                                            <!-- RECEPTIONNIST -->
<!-- Modal -->
<div id=\"addFacture\" class=\"modal fade\" role=\"dialog\">
        <div class=\"modal-dialog\">

            <!-- Modal content-->
            <div class=\"modal-content\">
                <div class=\"modal-header\">
                    <button type=\"button\" class=\"close\" data-dismiss=\"modal\">&times;</button>
                    <h4 class=\"modal-title\">Bill</h4>
                </div>
                <div class=\"modal-body\">
                


                        <div class=\"row-fluid\">
      <div class=\"span12\">
        <div class=\"widget-box\">
          <div class=\"widget-title\"> <span class=\"icon\"> <i class=\"icon-briefcase\"></i> </span>
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
                  <button id=\"payInvoice\" class=\"btn btn-primary btn-large pull-right\">Pay Invoice</button> </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
                </div>
                <div class=\"modal-footer\">
                    <button type=\"button\" class=\"btn btn-default\" data-dismiss=\"modal\">Close</button>
                </div>
            </div>


  </div>
</div>

    <div class=\"widget-box\">
          <div class=\"widget-title\"> <span class=\"icon\"><i class=\"fa fa-file-text-o\"></i></span>
            <h5>All Files</h5>
            <div style=\"padding-top: 0.2%\"><a class=\"btn btn-info\"  href=\"{{ path('fiche_new') }}\"><i class=\"fa fa-plus-circle\"></i></a></div>
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
                  <th>Actions</th>
            </tr>
        </thead>
        <tbody>
        {% for fiche in fiches %}
            <tr>
                <td><a href=\"{{ path('fiche_show', { 'id': fiche.id }) }}\">{{ fiche.datefiche|date('Y-m-d H:i:s') }}</a></td>
                <td>{{ fiche.Client.prenomprop }}</td>
                <td>{{ fiche.Emp.prenomemp }}</td>
                <td>{{ fiche.prestation }} </td>
                <td>{{ fiche.diagfiche }}</td>
                <td>{{ fiche.solutionfiche }}</td>
                <td>{{ fiche.typereparation }}</td>
                <td><button type=\"button\" id=\"cost\" class=\"btn btn-link\" data-toggle=\"modal\" data-target=\"#addFacture\">0,00 TND</button></td>
                <td><!-- Rounded switch -->
                  <div id=\"invoiceStatus1\" >
                  <input type=\"checkbox\" disabled data-toggle=\"toggle\" data-on=\"Paid\" data-off=\"Unpaid\" data-onstyle=\"success\" data-width=\"50\" data-height=\"25\" /> 
                  </div>
                </td>
                <td>
                <a class=\"btn btn-warning\" href=\"{{ path('fiche_edit', { 'id': fiche.id }) }}\">Edit</a>
                <button class=\"btn btn-danger\" data-href=\"/delete.php?id=54\" data-toggle=\"modal\" data-target=\"#confirm-delete\">
                Delete </button>
                    <!-- <ul>
                        <li>
                            <a href=\"{{ path('fiche_show', { 'id': fiche.id }) }}\">show</a>
                        </li>
                        <li>
                            <a href=\"{{ path('fiche_edit', { 'id': fiche.id }) }}\">edit</a>
                        </li>
                    </ul> -->
                </td>
            </tr>
        {% endfor %}
        </tbody>
 </table>
          </div>
    </div>


    <ul>
        <li>
            <a href=\"{{ path('fiche_new') }}\">Create a new fiche</a>
        </li>
    </ul>
{% endblock %}
", "fiche/index-receptionnist.html.twig", "C:\\Users\\Admin\\Desktop\\OttoCar-BackEnd\\app\\Resources\\views\\fiche\\index-receptionnist.html.twig");
    }
}
