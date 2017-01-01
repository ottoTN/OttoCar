<?php

/* compte/index.html.twig */
class __TwigTemplate_5db5fa01ab9e17bcf04670f947cb2bf5f8e989439407b8ca97c9211b942b014a extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "compte/index.html.twig", 1);
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
        $__internal_9a4f20d959da03e71be7ef1f0a5270a0f178310a4d18cde2a29357d918369a34 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_9a4f20d959da03e71be7ef1f0a5270a0f178310a4d18cde2a29357d918369a34->enter($__internal_9a4f20d959da03e71be7ef1f0a5270a0f178310a4d18cde2a29357d918369a34_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "compte/index.html.twig"));

        $__internal_7185113eed669cfd97a0844e4086dcef1a1699a15fb1603e4046a1e6acdf06ee = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7185113eed669cfd97a0844e4086dcef1a1699a15fb1603e4046a1e6acdf06ee->enter($__internal_7185113eed669cfd97a0844e4086dcef1a1699a15fb1603e4046a1e6acdf06ee_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "compte/index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_9a4f20d959da03e71be7ef1f0a5270a0f178310a4d18cde2a29357d918369a34->leave($__internal_9a4f20d959da03e71be7ef1f0a5270a0f178310a4d18cde2a29357d918369a34_prof);

        
        $__internal_7185113eed669cfd97a0844e4086dcef1a1699a15fb1603e4046a1e6acdf06ee->leave($__internal_7185113eed669cfd97a0844e4086dcef1a1699a15fb1603e4046a1e6acdf06ee_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_6d07730d381b4f1eb87fec514b22d5ee42ba6bc5ab9e8a68c3b50b602047a5a6 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_6d07730d381b4f1eb87fec514b22d5ee42ba6bc5ab9e8a68c3b50b602047a5a6->enter($__internal_6d07730d381b4f1eb87fec514b22d5ee42ba6bc5ab9e8a68c3b50b602047a5a6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_725fa382a09ca7fa35538a03486bc010b87cf49500c8815e9498c3cd3a538d45 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_725fa382a09ca7fa35538a03486bc010b87cf49500c8815e9498c3cd3a538d45->enter($__internal_725fa382a09ca7fa35538a03486bc010b87cf49500c8815e9498c3cd3a538d45_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "  <div class=\"modal fade\" id=\"editCurrentClient\" tabindex=\"-1\" role=\"dialog\" aria-labelledby=\"editCurrentClient\">
<div class=\"modal-dialog\">
  <div class=\"modal-content\">
    <div class=\"modal-header\">
      <button type=\"button\" class=\"close\" data-dismiss=\"modal\" aria-label=\"Close\"><span
          aria-hidden=\"true\">&times;</span></button>
      <h4 class=\"modal-title\" id=\"editCompte\">Edit account</h4>
    </div>
    <div class=\"modal-body\">
         <input type=\"hidden\" id=\"id-client\">
        <input type=\"submit\" class=\"btn btn-success\" value=\"Edit\" />
       
    </div>
    <div class=\"modal-footer\">
    </div>
  </div>
</div>
</div>


<div class=\"modal fade\" id=\"deleteCurrentClient\" tabindex=\"-1\" role=\"dialog\" aria-labelledby=\"editCurrentClient\">
<div class=\"modal-dialog\">
  <div class=\"modal-content\">
    <div class=\"modal-header\">
      <button type=\"button\" class=\"close\" data-dismiss=\"modal\" aria-label=\"Close\"><span
          aria-hidden=\"true\">&times;</span></button>
      <h4 class=\"modal-title\" id=\"deleteCompte\">Delete account</h4>
    </div>
    <div class=\"modal-body\">
       
    </div>
    <div class=\"modal-footer\">
    </div>
  </div>
</div>
</div>

  <div class=\"widget-box\">
          <div class=\"widget-title\"> <span class=\"icon\"><i class=\"fa fa-id-card-o\"></i></span>
            <h5>All Accounts</h5>
             <div style=\"padding-top: 0.2%\"><a class=\"btn btn-info\"  href=\"";
        // line 44
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("compte_new");
        echo "\"><i class=\"fa fa-plus-circle\"></i></a></div>
          </div>
          <div class=\"widget-content nopadding\">
            <table class=\"table table-bordere data-table\">
        <thead>
            <tr>
                <th>C.I.N</th>
                  <th>First Name</th>
                  <th>Last Name</th>
                  <th>Phone</th>
                  <th>Adress</th>
                  <th>Email Adress</th>
                  <th>Car Brand</th>
                  <th>Car Version</th>
                  <th>Plate License</th>
                  <th>Manage</th>
            </tr>
        </thead>
        <tbody>
        ";
        // line 63
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["comptes"]) ? $context["comptes"] : $this->getContext($context, "comptes")));
        foreach ($context['_seq'] as $context["_key"] => $context["compte"]) {
            // line 64
            echo "            <tr>
                 <td> ";
            // line 65
            echo twig_escape_filter($this->env, $this->getAttribute($context["compte"], "cinprop", array()), "html", null, true);
            echo " </td>
                <td> ";
            // line 66
            echo twig_escape_filter($this->env, $this->getAttribute($context["compte"], "prenomprop", array()), "html", null, true);
            echo " </td>
                <td> ";
            // line 67
            echo twig_escape_filter($this->env, $this->getAttribute($context["compte"], "nomprop", array()), "html", null, true);
            echo " </td>
                <td> ";
            // line 68
            echo twig_escape_filter($this->env, $this->getAttribute($context["compte"], "telprop", array()), "html", null, true);
            echo " </td>
                <td> ";
            // line 69
            echo twig_escape_filter($this->env, $this->getAttribute($context["compte"], "adresseprop", array()), "html", null, true);
            echo " </td>
                <td> ";
            // line 70
            echo twig_escape_filter($this->env, $this->getAttribute($context["compte"], "mailprop", array()), "html", null, true);
            echo "</td>
                <td>  ";
            // line 71
            echo twig_escape_filter($this->env, $this->getAttribute($context["compte"], "modelevoit", array()), "html", null, true);
            echo " </td>
                <td>  ";
            // line 72
            echo twig_escape_filter($this->env, $this->getAttribute($context["compte"], "marquevoit", array()), "html", null, true);
            echo " </td>
                <td>  ";
            // line 73
            echo twig_escape_filter($this->env, $this->getAttribute($context["compte"], "immatvoit", array()), "html", null, true);
            echo "</td>
                <td>
                <a data-toggle=\"modal\" data-target=\"#editCurrentClient\" class=\"btn btn-warning\" href=\"";
            // line 75
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("compte_edit", array("id" => $this->getAttribute($context["compte"], "id", array()))), "html", null, true);
            echo "\">Edit</a>
                <a data-toggle=\"modal\" data-target=\"#deleteCurrentClient\" class=\"btn btn-danger\" href=\"";
            // line 76
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("compte_show", array("id" => $this->getAttribute($context["compte"], "id", array()))), "html", null, true);
            echo "\">Delete</a>
                    <!-- <ul>
                        <li>
                            <a href=\"";
            // line 79
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("compte_show", array("id" => $this->getAttribute($context["compte"], "id", array()))), "html", null, true);
            echo "\">show</a>
                        </li>
                        <li>
                            <a href=\"";
            // line 82
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("compte_edit", array("id" => $this->getAttribute($context["compte"], "id", array()))), "html", null, true);
            echo "\">edit</a>
                        </li>
                    </ul> -->
                </td>
            </tr>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['compte'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 88
        echo "        </tbody>
            </table>
          </div>
    </div>
";
        
        $__internal_725fa382a09ca7fa35538a03486bc010b87cf49500c8815e9498c3cd3a538d45->leave($__internal_725fa382a09ca7fa35538a03486bc010b87cf49500c8815e9498c3cd3a538d45_prof);

        
        $__internal_6d07730d381b4f1eb87fec514b22d5ee42ba6bc5ab9e8a68c3b50b602047a5a6->leave($__internal_6d07730d381b4f1eb87fec514b22d5ee42ba6bc5ab9e8a68c3b50b602047a5a6_prof);

    }

    public function getTemplateName()
    {
        return "compte/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  185 => 88,  173 => 82,  167 => 79,  161 => 76,  157 => 75,  152 => 73,  148 => 72,  144 => 71,  140 => 70,  136 => 69,  132 => 68,  128 => 67,  124 => 66,  120 => 65,  117 => 64,  113 => 63,  91 => 44,  49 => 4,  40 => 3,  11 => 1,);
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
  <div class=\"modal fade\" id=\"editCurrentClient\" tabindex=\"-1\" role=\"dialog\" aria-labelledby=\"editCurrentClient\">
<div class=\"modal-dialog\">
  <div class=\"modal-content\">
    <div class=\"modal-header\">
      <button type=\"button\" class=\"close\" data-dismiss=\"modal\" aria-label=\"Close\"><span
          aria-hidden=\"true\">&times;</span></button>
      <h4 class=\"modal-title\" id=\"editCompte\">Edit account</h4>
    </div>
    <div class=\"modal-body\">
         <input type=\"hidden\" id=\"id-client\">
        <input type=\"submit\" class=\"btn btn-success\" value=\"Edit\" />
       
    </div>
    <div class=\"modal-footer\">
    </div>
  </div>
</div>
</div>


<div class=\"modal fade\" id=\"deleteCurrentClient\" tabindex=\"-1\" role=\"dialog\" aria-labelledby=\"editCurrentClient\">
<div class=\"modal-dialog\">
  <div class=\"modal-content\">
    <div class=\"modal-header\">
      <button type=\"button\" class=\"close\" data-dismiss=\"modal\" aria-label=\"Close\"><span
          aria-hidden=\"true\">&times;</span></button>
      <h4 class=\"modal-title\" id=\"deleteCompte\">Delete account</h4>
    </div>
    <div class=\"modal-body\">
       
    </div>
    <div class=\"modal-footer\">
    </div>
  </div>
</div>
</div>

  <div class=\"widget-box\">
          <div class=\"widget-title\"> <span class=\"icon\"><i class=\"fa fa-id-card-o\"></i></span>
            <h5>All Accounts</h5>
             <div style=\"padding-top: 0.2%\"><a class=\"btn btn-info\"  href=\"{{ path('compte_new') }}\"><i class=\"fa fa-plus-circle\"></i></a></div>
          </div>
          <div class=\"widget-content nopadding\">
            <table class=\"table table-bordere data-table\">
        <thead>
            <tr>
                <th>C.I.N</th>
                  <th>First Name</th>
                  <th>Last Name</th>
                  <th>Phone</th>
                  <th>Adress</th>
                  <th>Email Adress</th>
                  <th>Car Brand</th>
                  <th>Car Version</th>
                  <th>Plate License</th>
                  <th>Manage</th>
            </tr>
        </thead>
        <tbody>
        {% for compte in comptes %}
            <tr>
                 <td> {{ compte.cinprop }} </td>
                <td> {{ compte.prenomprop }} </td>
                <td> {{ compte.nomprop }} </td>
                <td> {{ compte.telprop }} </td>
                <td> {{ compte.adresseprop }} </td>
                <td> {{ compte.mailprop }}</td>
                <td>  {{ compte.modelevoit }} </td>
                <td>  {{ compte.marquevoit }} </td>
                <td>  {{ compte.immatvoit }}</td>
                <td>
                <a data-toggle=\"modal\" data-target=\"#editCurrentClient\" class=\"btn btn-warning\" href=\"{{ path('compte_edit', { 'id': compte.id }) }}\">Edit</a>
                <a data-toggle=\"modal\" data-target=\"#deleteCurrentClient\" class=\"btn btn-danger\" href=\"{{ path('compte_show', { 'id': compte.id }) }}\">Delete</a>
                    <!-- <ul>
                        <li>
                            <a href=\"{{ path('compte_show', { 'id': compte.id }) }}\">show</a>
                        </li>
                        <li>
                            <a href=\"{{ path('compte_edit', { 'id': compte.id }) }}\">edit</a>
                        </li>
                    </ul> -->
                </td>
            </tr>
        {% endfor %}
        </tbody>
            </table>
          </div>
    </div>
{% endblock %}
", "compte/index.html.twig", "J:\\_1NewME\\Freelance\\Symfony\\OttoCar\\app\\Resources\\views\\compte\\index.html.twig");
    }
}
