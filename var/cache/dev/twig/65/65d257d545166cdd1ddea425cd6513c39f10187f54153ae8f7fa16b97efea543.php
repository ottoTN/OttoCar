<?php

/* employe/new.html.twig */
class __TwigTemplate_e62e6c77dc2d51750e8846924ddccc5cb4c87f8197d788873add3d5b0fef6715 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "employe/new.html.twig", 1);
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
        $__internal_8dd3f028afe4370350ddb7e3afd1266b64ba36d603456da0ed814be9cd22511c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_8dd3f028afe4370350ddb7e3afd1266b64ba36d603456da0ed814be9cd22511c->enter($__internal_8dd3f028afe4370350ddb7e3afd1266b64ba36d603456da0ed814be9cd22511c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "employe/new.html.twig"));

        $__internal_7cb8e62411f9fad3f05faef9c0c539fb0bccdd0c19cc74a3d291a6243d0f4a47 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7cb8e62411f9fad3f05faef9c0c539fb0bccdd0c19cc74a3d291a6243d0f4a47->enter($__internal_7cb8e62411f9fad3f05faef9c0c539fb0bccdd0c19cc74a3d291a6243d0f4a47_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "employe/new.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_8dd3f028afe4370350ddb7e3afd1266b64ba36d603456da0ed814be9cd22511c->leave($__internal_8dd3f028afe4370350ddb7e3afd1266b64ba36d603456da0ed814be9cd22511c_prof);

        
        $__internal_7cb8e62411f9fad3f05faef9c0c539fb0bccdd0c19cc74a3d291a6243d0f4a47->leave($__internal_7cb8e62411f9fad3f05faef9c0c539fb0bccdd0c19cc74a3d291a6243d0f4a47_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_b6434ac56df8dfd348de24626435698dd44bb0b47c8df976684edde14a67d00a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b6434ac56df8dfd348de24626435698dd44bb0b47c8df976684edde14a67d00a->enter($__internal_b6434ac56df8dfd348de24626435698dd44bb0b47c8df976684edde14a67d00a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_4d61139169bc4f6dbdc595b0b98b32e29653cd9017bf883713b3db3c0ddbb054 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4d61139169bc4f6dbdc595b0b98b32e29653cd9017bf883713b3db3c0ddbb054->enter($__internal_4d61139169bc4f6dbdc595b0b98b32e29653cd9017bf883713b3db3c0ddbb054_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "    <h1>Employe creation</h1>
<div class=\"row-fluid centre\">
        <div class=\"span10\">
            <div class=\"widget-box\">
                <div class=\"widget-title\"> <span class=\"icon\"> <i class=\"fa fa-user\"></i> </span>
                    <h5>New Employee</h5>
                </div>
                <div class=\"widget-content nopadding\">

    ";
        // line 13
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_start', array("attr" => array("class" => "form-horizontal")));
        echo "
        <div class=\"control-group\">
                            <label class=\"control-label\">C.I.N :</label>
                            <div class=\"controls\">
                              ";
        // line 17
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "cinemp", array()), 'widget', array("attr" => array("class" => "span6", "id" => "cin")));
        echo "
                            </div>
                          </div>
                        <div class=\"control-group\">
                            <label class=\"control-label\">First name :</label>
                            <div class=\"controls\">
                                ";
        // line 23
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "nomemp", array()), 'widget', array("attr" => array("class" => "span6")));
        echo "
                            </div>
                        </div>
                        <div class=\"control-group\">
                            <label class=\"control-label\">Last name :</label>
                            <div class=\"controls\">
                                ";
        // line 29
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "prenomemp", array()), 'widget', array("attr" => array("class" => "span6")));
        echo "
                            </div>
                        </div>
                        <div class=\"control-group\">
                          <label class=\"control-label\">Social Status :</label>
                          <div class=\"controls\">
                          ";
        // line 35
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "statutsoc", array()), 'widget', array("attr" => array("class" => "span6")));
        echo "<br>
                          </div>
                          </div>
                        <div class=\"control-group\">
                            <label class=\"control-label\">Address :</label>
                            <div class=\"controls\">
                                ";
        // line 41
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "adresseemp", array()), 'widget', array("attr" => array("class" => "span6")));
        echo "
                            </div>
                        </div>

                        <div class=\"control-group\">
                          <label for=\"normal\" class=\"control-label\">Date Of Birth :</label>
                          <div class=\"controls\">
                            ";
        // line 48
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "datenaissemp", array()), 'widget', array("attr" => array("class" => "span2", "style" => "display: inline-flex;")));
        echo "
                            </div>
                        </div>
                        
                        <div class=\"control-group\">
                            <label class=\"control-label\">Phone :</label>
                            <div class=\"controls\">
                                ";
        // line 55
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "telemp", array()), 'widget', array("attr" => array("class" => "span6")));
        echo "
                            </div>
                        </div>  
                        <div class=\"control-group\">
                          <label class=\"control-label\">Specialty (Type) :</label>
                          <div class=\"controls\">
                            ";
        // line 61
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "typeemp", array()), 'widget', array("attr" => array("class" => "span6")));
        echo "<br> 
                            </div>
                            </div>
                        <div class=\"control-group\">
                          <label class=\"control-label\">Salary :</label>
                          <div class=\"controls\">
                            <div class=\"input-append\">
                              ";
        // line 68
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "salaire", array()), 'widget', array("attr" => array("class" => "span6")));
        echo "
                              <span class=\"add-on\">TND</span> </div>
                          </div>
                        </div> 


        <center><input type=\"submit\" class=\"btn btn-success\" value=\"Create\" /></center>
    ";
        // line 75
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_end');
        echo "

    <ul>
        <li>
            <a href=\"";
        // line 79
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("employe_index");
        echo "\">Back to the list</a>
        </li>
    </ul>
";
        
        $__internal_4d61139169bc4f6dbdc595b0b98b32e29653cd9017bf883713b3db3c0ddbb054->leave($__internal_4d61139169bc4f6dbdc595b0b98b32e29653cd9017bf883713b3db3c0ddbb054_prof);

        
        $__internal_b6434ac56df8dfd348de24626435698dd44bb0b47c8df976684edde14a67d00a->leave($__internal_b6434ac56df8dfd348de24626435698dd44bb0b47c8df976684edde14a67d00a_prof);

    }

    public function getTemplateName()
    {
        return "employe/new.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  159 => 79,  152 => 75,  142 => 68,  132 => 61,  123 => 55,  113 => 48,  103 => 41,  94 => 35,  85 => 29,  76 => 23,  67 => 17,  60 => 13,  49 => 4,  40 => 3,  11 => 1,);
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
    <h1>Employe creation</h1>
<div class=\"row-fluid centre\">
        <div class=\"span10\">
            <div class=\"widget-box\">
                <div class=\"widget-title\"> <span class=\"icon\"> <i class=\"fa fa-user\"></i> </span>
                    <h5>New Employee</h5>
                </div>
                <div class=\"widget-content nopadding\">

    {{ form_start(form, {'attr': {'class': 'form-horizontal'}}) }}
        <div class=\"control-group\">
                            <label class=\"control-label\">C.I.N :</label>
                            <div class=\"controls\">
                              {{ form_widget(form.cinemp, {'attr': {'class': 'span6' , 'id':'cin'}}) }}
                            </div>
                          </div>
                        <div class=\"control-group\">
                            <label class=\"control-label\">First name :</label>
                            <div class=\"controls\">
                                {{ form_widget(form.nomemp, {'attr': {'class': 'span6'}}) }}
                            </div>
                        </div>
                        <div class=\"control-group\">
                            <label class=\"control-label\">Last name :</label>
                            <div class=\"controls\">
                                {{ form_widget(form.prenomemp, {'attr': {'class': 'span6'}}) }}
                            </div>
                        </div>
                        <div class=\"control-group\">
                          <label class=\"control-label\">Social Status :</label>
                          <div class=\"controls\">
                          {{ form_widget(form.statutsoc, {'attr': {'class': 'span6'}}) }}<br>
                          </div>
                          </div>
                        <div class=\"control-group\">
                            <label class=\"control-label\">Address :</label>
                            <div class=\"controls\">
                                {{ form_widget(form.adresseemp, {'attr': {'class': 'span6'}}) }}
                            </div>
                        </div>

                        <div class=\"control-group\">
                          <label for=\"normal\" class=\"control-label\">Date Of Birth :</label>
                          <div class=\"controls\">
                            {{ form_widget(form.datenaissemp, {'attr': {'class': 'span2', 'style': 'display: inline-flex;'}}) }}
                            </div>
                        </div>
                        
                        <div class=\"control-group\">
                            <label class=\"control-label\">Phone :</label>
                            <div class=\"controls\">
                                {{ form_widget(form.telemp, {'attr': {'class': 'span6'}}) }}
                            </div>
                        </div>  
                        <div class=\"control-group\">
                          <label class=\"control-label\">Specialty (Type) :</label>
                          <div class=\"controls\">
                            {{ form_widget(form.typeemp, {'attr': {'class': 'span6'}}) }}<br> 
                            </div>
                            </div>
                        <div class=\"control-group\">
                          <label class=\"control-label\">Salary :</label>
                          <div class=\"controls\">
                            <div class=\"input-append\">
                              {{ form_widget(form.salaire, {'attr': {'class': 'span6'}}) }}
                              <span class=\"add-on\">TND</span> </div>
                          </div>
                        </div> 


        <center><input type=\"submit\" class=\"btn btn-success\" value=\"Create\" /></center>
    {{ form_end(form) }}

    <ul>
        <li>
            <a href=\"{{ path('employe_index') }}\">Back to the list</a>
        </li>
    </ul>
{% endblock %}
", "employe/new.html.twig", "C:\\Users\\Admin\\Desktop\\OttoCar\\app\\Resources\\views\\employe\\new.html.twig");
    }
}
