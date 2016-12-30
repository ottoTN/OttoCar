<?php

/* @Framework/FormTable/form_row.html.php */
class __TwigTemplate_6bba29f0d58df87e6e4bd38359449a99b4546e0bf33644726c475a01916f1b86 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_0bf19aa5a4ce3c28f49e344765463e35324f550ebf9ca132b125fb34f0e711be = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_0bf19aa5a4ce3c28f49e344765463e35324f550ebf9ca132b125fb34f0e711be->enter($__internal_0bf19aa5a4ce3c28f49e344765463e35324f550ebf9ca132b125fb34f0e711be_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/form_row.html.php"));

        $__internal_52297e03775ac94fde30e3c025c4b415bc69fe9e568897927038e97ace5b6cd1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_52297e03775ac94fde30e3c025c4b415bc69fe9e568897927038e97ace5b6cd1->enter($__internal_52297e03775ac94fde30e3c025c4b415bc69fe9e568897927038e97ace5b6cd1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/form_row.html.php"));

        // line 1
        echo "<tr>
    <td>
        <?php echo \$view['form']->label(\$form) ?>
    </td>
    <td>
        <?php echo \$view['form']->errors(\$form) ?>
        <?php echo \$view['form']->widget(\$form) ?>
    </td>
</tr>
";
        
        $__internal_0bf19aa5a4ce3c28f49e344765463e35324f550ebf9ca132b125fb34f0e711be->leave($__internal_0bf19aa5a4ce3c28f49e344765463e35324f550ebf9ca132b125fb34f0e711be_prof);

        
        $__internal_52297e03775ac94fde30e3c025c4b415bc69fe9e568897927038e97ace5b6cd1->leave($__internal_52297e03775ac94fde30e3c025c4b415bc69fe9e568897927038e97ace5b6cd1_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/FormTable/form_row.html.php";
    }

    public function getDebugInfo()
    {
        return array (  25 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("<tr>
    <td>
        <?php echo \$view['form']->label(\$form) ?>
    </td>
    <td>
        <?php echo \$view['form']->errors(\$form) ?>
        <?php echo \$view['form']->widget(\$form) ?>
    </td>
</tr>
", "@Framework/FormTable/form_row.html.php", "D:\\Program Files (x86)\\EasyPHP-Devserver-16.1\\eds-www\\Garage\\Garage\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\FormTable\\form_row.html.php");
    }
}
